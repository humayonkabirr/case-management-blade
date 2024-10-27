<?php

namespace App\Services\Api;

use App\Models\Union;

class UnionService
{
    protected $model;

    public function __construct(Union $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model::all(); // Example method to list all models
    }

    // Add your service methods here
}
