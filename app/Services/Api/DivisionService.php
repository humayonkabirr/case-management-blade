<?php

namespace App\Services\Api;

use App\Models\Division;

class DivisionService
{
    protected $model;

    public function __construct(Division $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model::all();
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function find($id)
    {
        return $this->model::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $division = $this->find($id);
        $division->update($data);
        return $division;
    }

    public function delete($id)
    {
        $division = $this->find($id);
        $division->delete();
        return $division;
    }

    public function paginatedList($perPage = 10)
    {
        return $this->model::paginate($perPage);
    }
}
