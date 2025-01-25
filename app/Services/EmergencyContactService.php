<?php

namespace App\Services;

use App\Models\EmergencyContact;

class EmergencyContactService
{
    protected $model;

    public function __construct(EmergencyContact $model)
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
     * @return \App\Models\EmergencyContact|null
     */
    public function findById($id)
    {
        return $this->model->find($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\EmergencyContact
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
     * @return \App\Models\EmergencyContact
     */
    public function update($id, array $data)
    {
        $emergencyContact = $this->findById($id);

        if ($emergencyContact) {
            $emergencyContact->update($data); // Update record
        }

        return $emergencyContact;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $emergencyContact = $this->findById($id);

        if ($emergencyContact) {
            return $emergencyContact->delete(); // Soft delete record
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
        $emergencyContact = $this->findById($id);

        if ($emergencyContact) {
            return $emergencyContact->forceDelete(); // Delete record permanently
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
        $emergencyContact = $this->model->onlyTrashed()->find($id);

        if ($emergencyContact) {
            return $emergencyContact->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
