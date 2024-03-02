<?php

namespace tests\unit\models;

use app\models\User;

class UserTest extends \Codeception\Test\Unit {

    public function testFindUserById() {

        // $this->assertTrue(true);
        // $this->assertFalse(false);

        verify($user = User::findIdentity(1))->notEmpty();
        verify($user->username)->equals('admin');
        verify(User::findIdentity(999))->empty();

        

    }

    // public function testFindUserByName() {

    //     $this->assertTrue(true);
    //     $this->assertFalse(false);
    // }
}
