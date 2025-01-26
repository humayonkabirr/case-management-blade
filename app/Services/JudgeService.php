<?php

namespace App\Services;
use App\Models\User;

class JudgeService
{
    protected User $model;
    
    public function __construct(User $model)
    {
        $this->model = $model;
    }
    

    /**
     * Get all Judge data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        return $this->model; // Get all records
    }


    /**
     * Get a single Judge data by its ID.
     *
     * @param int $id
     * @return \App\Models\Judge|null
     */
    public function find($id)
    {
        return $this->model->with('education', 'experience', 'emergencyContact', 'address')->findOrFail($id); // Find by ID
    }


    /**
     * Create a new Judge .
     *
     * @param array $data
     * @return \App\Models\Judge
     */
    public function create(array $data)
    {
        return $this->model->create($data); // Create new record
    }

    
    /** 
     *  Update an Judge data by its ID.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\Judge
     */
    public function update($id, array $data)
    {
        $findData = $this->find($id);
        if ($findData) {
            $findData->update($data); // Update record
        }
        return $findData;
    }


    /**
     * Delete an Judge data by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $findData = $this->find($id);
        if ($findData) {
            return $findData->delete(); // Soft delete record
        }
        return false; // Return false if not found
    }


    /**
     * Soft delete an Judge data by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function forceDelete($id)
    {
        $findData = $this->find($id);
        if ($findData) {
            return $findData->forceDelete(); // Delete record permanently
        }
        return false; // Return false if not found
    }


    /**
     * Restore a soft-deleted Judge data by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function restore($id)
    {
        $findData = $this->model->onlyTrashed()->find($id);
        if ($findData) {
            return $findData->restore(); // Restore soft deleted record
        }
        return false; // Return false if not found
    }
}
