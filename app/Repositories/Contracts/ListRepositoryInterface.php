<?php

namespace App\Repositories\Contracts;

interface ListRepositoryInterface
{
    public function all();

    public function paginate();

    public function find($id);

}
