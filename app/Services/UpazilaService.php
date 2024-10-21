<?php

    namespace App\Services;

    use App\Models\Upazila;

    class UpazilaService
    {
        protected $model;

        public function __construct(Upazila $model)
        {
            $this->model = $model;
        }

        public function list()
        {
            return $this->model::all(); // Example method to list all models
        }

        // Add your service methods here
    }