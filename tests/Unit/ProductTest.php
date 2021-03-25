<?php

namespace Tests\Unit;

use App\Classes\Produto;
use PHPUnit\Framework\TestCase;
use App\Models\User;
class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

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

    /**
     * A basic test example.
     *
     * @return void
     */

}
