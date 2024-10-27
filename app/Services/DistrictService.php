<?php

    namespace App\Services;

    use App\Models\District;

    class DistrictService
    {
        protected $model;

        public function __construct(District $model)
        {
            $this->model = $model;
        }

        public function list()
        {
            return $this->model::all(); // Example method to list all models
        }

        // Add your service methods here
    }