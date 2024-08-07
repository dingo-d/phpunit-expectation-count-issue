<?php

class C {
    public $num = 0;

    public function count() {
        $this->num = ++$this->num;
    }
}