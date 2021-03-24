<?php

namespace App\Repositories;

use App\Classes\ProdutoUsuario;

class ProductUser
{
    public function all()
    {
        $produtousuario = app(ProdutoUsuario::class);
        return $produtousuario::all();
    }

    public function paginate()
    {
        $produtousuario = app(ProdutoUsuario::class);
        return $produtousuario::paginate(10);
    }

    public function find($id)
    {
        $produtousuario = app(ProdutoUsuario::class);
        return $produtousuario::find($id);
    }
}
