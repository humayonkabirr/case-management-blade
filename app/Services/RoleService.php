<?php

namespace App\Services;

use App\Models\Auth\Role;

class RoleService
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model;
    }

    // Add your service methods here
}
