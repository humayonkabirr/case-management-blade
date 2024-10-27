<?php

namespace App\Services\Api;

use App\Models\Address;

class AddressService
{
    protected $model;

    public function __construct(Address $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model;
    }

    // Add your service methods here
}
