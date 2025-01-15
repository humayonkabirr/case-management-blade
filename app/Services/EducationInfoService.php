<?php

namespace App\Services;

use App\Models\EducationInfo;

class EducationInfoService
{
    protected $model;

    public function __construct(EducationInfo $model)
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
     * @return \App\Models\EducationInfo|null
     */
    public function find($id)
    {
        return $this->model->findOrFail($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\EducationInfo
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
     * @return \App\Models\EducationInfo
     */
    public function update($id, array $data)
    {
        $educationInfo = $this->find($id);

        if ($educationInfo) {
            $educationInfo->update($data); // Update record
        }

        return $educationInfo;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $educationInfo = $this->find($id);

        if ($educationInfo) {
            return $educationInfo->delete(); // Soft delete record
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
        $educationInfo = $this->find($id);

        if ($educationInfo) {
            return $educationInfo->forceDelete(); // Delete record permanently
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
        $educationInfo = $this->model->onlyTrashed()->find($id);

        if ($educationInfo) {
            return $educationInfo->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
