<?php
require_once('message/pb_message.php');
require_once('playerio/playerio_messages.php');
require_once('PlayerIOClient.php');
require_once('PlayerIOError.php');
require_once('HttpChannel.php');

class PlayerIO {
    private static $quickConnect;

    public static function quickConnect() {
        return PlayerIO::$quickConnect ?:
               PlayerIO::$quickConnect = new QuickConnect();
    }

    /**
     * @param $gameId
     * @param $connectionId
     * @param $userId
     * @param $auth
     * @throws PlayerIOError
     * @returns PlayerIOClient
     */
    public static function connect($gameId, $connectionId, $userId, $auth) {
        $args = new ConnectArgs();
        $output = new Connectoutput();
        $error = new ConnectError();

        $args->set_GameId($gameId);
        $args->set_connectionId($connectionId);
        $args->set_userId($userId);
        $args->set_auth($auth);

        $httpChannel = new HttpChannel();
        if ($httpChannel->request(10, $args, $output, $error)) {
            $token = $output->token();
            $userId = $output->userId();
            return new PlayerIOClient($httpChannel, $token, $userId);
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }
} 