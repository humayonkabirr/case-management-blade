<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationInfo extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = [
        'user_id',
        'institute',
        'degree',
        'education_level_id',
        'major_subject',
        'board_university',
        'accreditation',
        'admission_year',
        'graduation_year',
        'gpa_cgpa',
        'honors_awards',
        'location',
        'status',
    ];
    
    // Optionally, you can define relationships here
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }
}
