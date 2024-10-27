<?php

namespace App\Services\Api;

use App\Models\Upazila;

class UpazilaService
{
    protected $model;

    public function __construct(Upazila $model)
    {
        $this->model = $model;
    }

    // List all upazilas
    public function list()
    {
        return $this->model::all();
    }

    // Create a new upazila
    public function create(array $data)
    {
        return $this->model::create($data);
    }

    // Find a specific upazila by ID
    public function find($id)
    {
        return $this->model::findOrFail($id);
    }

    // Update an existing upazila
    public function update($id, array $data)
    {
        $upazila = $this->find($id);
        $upazila->update($data);
        return $upazila;
    }

    // Delete an upazila
    public function delete($id)
    {
        $upazila = $this->find($id);
        $upazila->delete();
        return $upazila;
    }

    // Paginated list of upazilas
    public function paginatedList($perPage = 10)
    {
        return $this->model::paginate($perPage);
    }
}
