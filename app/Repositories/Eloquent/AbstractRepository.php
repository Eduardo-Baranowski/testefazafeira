<?php

namespace App\Repositories\Eloquent;


use App\Classes\Produto;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function all()
    {
        return $this->model::all();
    }

    public function paginate()
    {
        return $this->model::paginate(10);
    }

    public function find($id)
    {
        return $this->model::find($id);
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

}
