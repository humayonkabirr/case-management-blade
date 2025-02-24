<?php

namespace App\Services;

use App\Models\EducationLevel;

class EducationLevelService
{
    protected $model;

    public function __construct(EducationLevel $model)
    {
        $this->model = $model;
    }

    /**
     * Get all education levels.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        return $this->model->all(); // Get all records
    }

    /**
     * Get a single education level by its ID.
     *
     * @param int $id
     * @return \App\Models\EducationLevel|null
     */
    public function findById($id)
    {
        return $this->model->find($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\EducationLevel
     */
    public function create(array $data)
    {
        return $this->model->create($data); // Create new record
    }

    /**
     * Update an existing education level by its ID.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\EducationLevel
     */
    public function update($id, array $data)
    {
        $educationLevel = $this->findById($id);

        if ($educationLevel) {
            $educationLevel->update($data); // Update record
        }

        return $educationLevel;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $educationLevel = $this->findById($id);

        if ($educationLevel) {
            return $educationLevel->delete(); // Soft delete record
        }

        return false; // Return false if not found
    }

    /**
     * Soft delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function deletePermanently($id)
    {
        $educationLevel = $this->findById($id);

        if ($educationLevel) {
            return $educationLevel->forceDelete(); // Delete record permanently
        }

        return false; // Return false if not found
    }

    /**
     * Restore a soft-deleted education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function restore($id)
    {
        $educationLevel = $this->model->onlyTrashed()->find($id);

        if ($educationLevel) {
            return $educationLevel->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
