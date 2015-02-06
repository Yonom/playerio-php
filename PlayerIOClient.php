<?php
require_once('BigDB.php');

class PlayerIOClient {
    private $authToken;
    private $connectUserId;
    private $httpChannel;

    private $bigDB;
    private $payVault;

    function __construct(HttpChannel $httpChannel, $authToken, $connectUserId) {
        $this->authToken = $authToken;
        $this->connectUserId = $connectUserId;

        $this->httpChannel = $httpChannel;
        $this->httpChannel->setToken($authToken);

        $this->bigDB = new BigDB($this->httpChannel);
    }

    function connectUserId() {
        return $this->connectUserId;
    }

    function authToken() {
        return $this->authToken;
    }

    function bigDB() {
        return $this->bigDB;
    }
} 