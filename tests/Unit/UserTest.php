<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckIfUserColumnsIsCorrect()
    {
        $user = new User;

        $expected = [
            'name',
            'email',
            'password',
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
