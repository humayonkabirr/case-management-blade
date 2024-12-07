<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    protected $model;

    public function __construct(User $model)
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
        return $this->model; // Get all records
    }

    /**
     * Get a single education level by its ID.
     *
     * @param int $id
     * @return \App\Models\User|null
     */
    public function findById($id)
    {
        return $this->model->find($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\User
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
     * @return \App\Models\User
     */
    public function update($id, array $data)
    {
        $user = $this->findById($id);

        if ($user) {
            $user->update($data); // Update record
        }

        return $user;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $user = $this->findById($id);

        if ($user) {
            return $user->delete(); // Soft delete record
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
        $user = $this->findById($id);

        if ($user) {
            return $user->forceDelete(); // Delete record permanently
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
        $user = $this->model->onlyTrashed()->find($id);

        if ($user) {
            return $user->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
