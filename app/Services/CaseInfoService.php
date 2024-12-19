<?php

namespace App\Services;
use App\Models\CaseInfo;

class CaseInfoService
{
    protected CaseInfo $model;
    
    public function __construct(CaseInfo $model)
    {
        $this->model = $model;
    }
    

    /**
     * Get all CaseInfo data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        return $this->model; // Get all records
    }


    /**
     * Get a single CaseInfo data by its ID.
     *
     * @param int $id
     * @return \App\Models\CaseInfo|null
     */
    public function find($id)
    {
        return $this->model->findOrFail($id); // Find by ID
    }


    /**
     * Create a new CaseInfo .
     *
     * @param array $data
     * @return \App\Models\CaseInfo
     */
    public function create(array $data)
    {
        return $this->model->create($data); // Create new record
    }

    
    /** 
     *  Update an CaseInfo data by its ID.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\CaseInfo
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
     * Delete an CaseInfo data by its ID.
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
     * Soft delete an CaseInfo data by its ID.
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
     * Restore a soft-deleted CaseInfo data by its ID.
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
