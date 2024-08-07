<?php

require 'C.php';
require 'D.php';

class B implements B_I {
    public $config;

    public function getClasses() {
        return [
            C::class,
            D::class,
        ];
    }

    public function setup() {
        foreach ($this->getClasses() as $class) {
            $initClass = new $class;

            $this->config[$class] = $initClass;
        }
    }

    public function getServices() {
        return $this->config;
    }
}