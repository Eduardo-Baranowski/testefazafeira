<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function all();

    public function paginate();

    public function find($id);

}
