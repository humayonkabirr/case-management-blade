<?php

namespace App\Services\Api;

use App\Models\District;

class DistrictService
{
    protected $model;

    public function __construct(District $model)
    {
        $this->model = $model;
    }

    public function listByDivision($id)
    {
        return $this->model::where('division_id', $id)->get(['id', 'name']); // Method to list all districts
    }

    public function list()
    {
        return $this->model::all(); // Method to list all districts
    }

    public function create(array $data)
    {
        return $this->model::create($data); // Method to create a new district
    }

    public function find($id)
    {
        return $this->model::findOrFail($id); // Method to find a district by ID
    }

    public function update($id, array $data)
    {
        $district = $this->find($id); // Find the district
        $district->update($data); // Update the district with new data
        return $district; // Return the updated district
    }

    public function delete($id)
    {
        $district = $this->find($id); // Find the district
        $district->delete(); // Delete the district
        return $district; // Optionally return the deleted district
    }

    public function paginatedList($perPage = 10)
    {
        return $this->model::paginate($perPage); // Method for paginated listing
    }
}
