<?php

namespace App\Services\Api;

use App\Models\Union;

class UnionService
{
    protected $model;

    public function __construct(Union $model)
    {
        $this->model = $model;
    }

    // List all unions
    public function list()
    {
        return $this->model::all();
    }

    // Create a new union
    public function create(array $data)
    {
        return $this->model::create($data);
    }

    // Find a specific union by ID
    public function find($id)
    {
        return $this->model::findOrFail($id);
    }

    // Update an existing union
    public function update($id, array $data)
    {
        $union = $this->find($id);
        $union->update($data);
        return $union;
    }

    // Delete a union
    public function delete($id)
    {
        $union = $this->find($id);
        $union->delete();
        return $union;
    }

    // Paginated list of unions
    public function paginatedList($perPage = 10)
    {
        return $this->model::paginate($perPage);
    }
}
