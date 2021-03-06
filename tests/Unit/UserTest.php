<?php

namespace Tests\Unit;

use App\Classes\Produto;
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

    public function testCheckIfProductColumnsIsCorrect()
    {
        $produto = new Produto();

        $expected = [
            'nome',
            'cod',
            'preco',
        ];

        $arrayCompared = array_diff($expected, $produto->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }

    public function a_user_has_an_id(){
        $user =  User::find(1);
        $this->assertEquals(1, $user->id);
    }
}
