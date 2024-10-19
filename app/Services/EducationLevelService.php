<?php

namespace App\Services;
use App\Models\EducationLevel;

class EducationLevelService
{
    public function getAll(){
        EducationLevel::get();
    }
    // Add your service methods here
}