<?php

require 'B_I.php';
require 'B.php';

class A {
    public function __construct(private readonly B_I $b) {
        $this->b->setup();
    }

    public function run() {
        $services = $this->b->getServices();

        foreach ($services as $service) {
            $service->count();
        }
    }
}
