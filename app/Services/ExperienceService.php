<?php

namespace App\Services;

use App\Models\Experience;

class ExperienceService
{
    protected $model;

    public function __construct(Experience $model)
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
     * @return \App\Models\Experience|null
     */
    public function findById($id)
    {
        return $this->model->find($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\Experience
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
     * @return \App\Models\Experience
     */
    public function update($id, array $data)
    {
        $experience = $this->findById($id);

        if ($experience) {
            $experience->update($data); // Update record
        }

        return $experience;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $experience = $this->findById($id);

        if ($experience) {
            return $experience->delete(); // Soft delete record
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
        $experience = $this->findById($id);

        if ($experience) {
            return $experience->forceDelete(); // Delete record permanently
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
        $experience = $this->model->onlyTrashed()->find($id);

        if ($experience) {
            return $experience->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
