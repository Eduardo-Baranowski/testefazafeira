<?php

namespace App\Repositories;

use App\Classes\Produto;

class ProductRepository
{
    public function all()
    {
        $produto = app(Produto::class);
        return $produto::all();
    }

    public function paginate()
    {
        $produto = app(Produto::class);
        return $produto::paginate(10);
    }

    public function find($id)
    {
        $produto = app(Produto::class);
        return $produto::find($id);
    }
}
