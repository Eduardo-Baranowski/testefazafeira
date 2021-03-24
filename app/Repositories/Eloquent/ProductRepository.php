<?php

namespace App\Repositories\Eloquent;

use App\Classes\Produto;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends AbstractRepository implements ProductRepositoryInterface
{
    protected $model = Produto::class;

}
