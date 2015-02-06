<?php

class DatabaseObject {
    private $data;
    private $origData;

    public function commit() {
        $this->origData = $this->data;
    }

    public function __construct (string $name){
        return isset($this->data[$name]);
    }

    public function __isset (string $name){
        return isset($this->data[$name]);
    }

    public function __get (string $name) {
        return $this->data{$name};
    }

    public function __set (string $name , mixed $value) {
        $this->data[$name] = $value;
    }

    public function __unset (string $name) {
        unset($this->data[$name]);
    }
}