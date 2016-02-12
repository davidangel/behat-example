<?php

class Greeter {

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        return 'Hello, ' . $this->name;
    }

}
