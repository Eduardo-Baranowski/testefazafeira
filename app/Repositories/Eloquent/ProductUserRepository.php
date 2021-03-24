<?php

namespace App\Repositories\Eloquent;

use App\Classes\ProdutoUsuario;
use App\Repositories\Contracts\ProductUserRepositoryInterface;

class ProductUserRepository extends AbstractRepository implements ProductUserRepositoryInterface
{

    protected $model = ProdutoUsuario::class;

}
