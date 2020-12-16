<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('diiegor@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('diiegor@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('aaaaaaaaaaaasd');
        $this->assertFalse($url);
    }

    public function test_password(){

        $password = Validate::password('didra990');
        $this->assertTrue($password);

        $password = Validate::password('123');
        $this->assertFalse($password);

    }

}