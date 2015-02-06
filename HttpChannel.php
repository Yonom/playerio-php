<?php
class HttpChannel {
    private $playerToken;

    public function request($method, $args, PBMessage $success, PBMessage $error) {
        $url = 'http://api.playerio.com/api/' . $method;
        $data = $args->SerializeToString();

        $options = array(
            'http' => array(
                'header'  => ['Content-type: application/x-www-form-urlencoded',
                             'playertoken:' . $this->playerToken],
                'method'  => 'POST',
                'content' => $data,
            ),
        );

        $context  = stream_context_create($options);
        $stream = fopen($url, 'r', false, $context);

        $res = $this->parse($stream);
        if ($res){
            $success->parseFromString(stream_get_contents($stream));
        } else {
            $error->parseFromString(stream_get_contents($stream));
        }

        fclose($stream);
        return $res;
    }

    private function parse($stream) {
        if (ord(fread($stream, 1)) == 1) {
            $num = fread($stream, 1) << 8 | fread($stream, 1);
            $token = fread($stream, $num);
            var_dump($token);
            $this->playerToken = $token;
        }
        return ord(fread($stream, 1)) == 1;
    }

    public function setToken($playerToken) {
        $this->playerToken = $playerToken;
    }
} 