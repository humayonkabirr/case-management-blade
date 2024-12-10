<?php

namespace App\Services;

use App\Models\Address;

class AddressService
{
    protected $model;

    public function __construct(Address $model)
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
     * @return \App\Models\Address|null
     */
    public function findById($id)
    {
        return $this->model->findOrFail($id); // Find by ID
    }

    /**
     * Create a new education level.
     *
     * @param array $data
     * @return \App\Models\Address
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
     * @return \App\Models\Address
     */
    public function update($id, array $data)
    {
        $address = $this->findById($id);

        if ($address) {
            $address->update($data); // Update record
        }

        return $address;
    }

    /**
     * Delete an education level by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete($id)
    {
        $address = $this->findById($id);

        if ($address) {
            return $address->delete(); // Soft delete record
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
        $address = $this->findById($id);

        if ($address) {
            return $address->forceDelete(); // Delete record permanently
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
        $address = $this->model->onlyTrashed()->find($id);

        if ($address) {
            return $address->restore(); // Restore soft deleted record
        }

        return false; // Return false if not found
    }
}
