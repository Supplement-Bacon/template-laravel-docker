<?php

use Codeception\Test\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ExampleTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testRegister()
    {
        $name = 'John Doe';
        $email = 'johndoe@example.com';
        $password = Hash::make('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }
}
