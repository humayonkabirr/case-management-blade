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

    public function list()
    {
        return $this->model->get();
    }
    // Add your service methods here
}