<?php

class QuickConnect {
    /**
     * @param $gameId
     * @param $usernameOrEmail
     * @param $password
     * @throws PlayerIOError
     * @returns PlayerIOClient
     */
    public function simpleConnect($gameId, $usernameOrEmail, $password) {
        $args = new SimpleConnectArgs();
        $output = new SimpleConnectOutput();
        $error = new SimpleConnectError();

        $args->set_GameId($gameId);
        $args->set_UsernameOrEmail($usernameOrEmail);
        $args->set_Password($password);

        $httpChannel = new HttpChannel();
        if ($httpChannel->request(400, $args, $output, $error)) {
            $token = $output->token();
            $userId = $output->userId();
            return new PlayerIOClient($httpChannel, $token, $userId);
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }
} 