<?php

namespace App\Repositories\Contracts;

interface ProductUserRepositoryInterface
{
    public function all();

    public function paginate();

    public function find($id);

}
