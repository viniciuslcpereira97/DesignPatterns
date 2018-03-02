<?php

namespace Tests;

use Tests\TestCase;
use PHPatterns\Database\Models\User;

class UserTest extends TestCase
{

    public function testExample() {
        $this->assertEquals(200, 200);
    }

    public function testSetNickName() {
        $user = new User;
        $nickname = "phpunit test";
        $user->setNickname($nickname);
        $this->assertEquals($nickname, $user->nickname);
    }

}
