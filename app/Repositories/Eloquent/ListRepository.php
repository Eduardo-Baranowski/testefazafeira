<?php

namespace App\Repositories\Eloquent;

use App\Classes\Lista;
use App\Repositories\Contracts\ListRepositoryInterface;

class ListRepository extends AbstractRepository implements ListRepositoryInterface
{

    protected $model = Lista::class;

}
