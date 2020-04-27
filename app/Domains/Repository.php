<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected $model;

    public function __construct(Model $model)
    {
        return $this->model = $model;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        $this->model->find($id)->delete();
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getModel()
    {
        return $this->model;
    }
}
