<?php

class PlayerIOError extends Exception {
    protected $message;
    protected $errorCode;

    function __construct($message, $errorCode) {
        $this->message = $message;
        $this->errorCode = $errorCode;
    }

    function __toString() {
        return $this->message;
    }
}
