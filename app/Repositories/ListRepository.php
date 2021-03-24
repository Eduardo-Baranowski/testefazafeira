<?php

namespace App\Repositories;

use App\Classes\Lista;

class ListRepository
{
    public function all()
    {
        $lista = app(Lista::class);
        return $lista::all();
    }

    public function paginate()
    {
        $lista = app(Lista::class);
        return $lista::paginate(10);
    }

    public function find($id)
    {
        $lista = app(Lista::class);
        return $lista::find($id);
    }
}
