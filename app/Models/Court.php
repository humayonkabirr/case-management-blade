<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Court extends Model
{
    
    use HasFactory, SoftDeletes;

    // Define the table associated with the model
    protected $table = 'courts';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'name',
        'bn_name',
        'division_id',
        'district_id',
        'location',
        'bn_location',
        'serial',
        'status',
    ];

    // Cast 'serial' and 'status' as integers (if necessary)
    protected $casts = [
        'serial' => 'integer',
        'status' => 'integer',
    ];

    // Define the relationship with the Division model (optional, assuming you have a Division model)
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    // Define the relationship with the District model (optional, assuming you have a District model)
    public function district()
    {
        return $this->belongsTo(District::class);
    }
 
}
