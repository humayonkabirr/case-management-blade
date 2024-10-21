<?php

    namespace App\Services;

    use App\Models\Division;

    class DivisionService
    {
        protected $model;

        public function __construct(Division $model)
        {
            $this->model = $model;
        }

        public function list()
        {
            return $this->model::all(); // Example method to list all models
        }

        // Add your service methods here
    }