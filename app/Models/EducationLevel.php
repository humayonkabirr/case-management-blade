<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationLevel extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = ['level', 'bn_level', 'status'];
 
    public function educationInfos()
    {
        return $this->hasMany(EducationInfo::class);
    }
}
