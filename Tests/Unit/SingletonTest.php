<?php

namespace Tests;

use Tests\TestCase;
use PHPatterns\Singleton\Singleton;

class InstantiationTest extends Singleton {}

class SingletonTest extends TestCase
{

    public function testIsTheSameInstance() {
        $first_instance = InstantiationTest::getInstance();
        $second_instance = InstantiationTest::getInstance();

        $this->assertTrue($first_instance === $second_instance);
    }

}
