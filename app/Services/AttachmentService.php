<?php

namespace App\Services;
use App\Models\Attachment;

class AttachmentService
{
    protected Attachment $model;
    
    public function __construct(Attachment $model)
    {
        $this->model = $model;
    }
    

    /**
     * Get all Attachment data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        return $this->model; // Get all records
    }


    /**
     * Get a single Attachment data by its ID.
     *
     * @param int $id
     * @return \App\Models\Attachment|null
     */
    public function find($id)
    {
        return $this->model->findOrFail($id); // Find by ID
    }


    /**
     * Create a new Attachment .
     *
     * @param array $data
     * @return \App\Models\Attachment
     */
    public function create(array $data)
    {
        return $this->model->create($data); // Create new record
    }

    
    /** 
     *  Update an Attachment data by its ID.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\Attachment
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
     * Delete an Attachment data by its ID.
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
     * Soft delete an Attachment data by its ID.
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
     * Restore a soft-deleted Attachment data by its ID.
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
