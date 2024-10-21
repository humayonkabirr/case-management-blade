<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'upazilas'; // Optional, as Laravel will infer the table name

    protected $fillable = [
        'district_id',
        'name',
        'bn_name',
        'url',
        'status',
    ];

    /**
     * Define the relationship with the District model.
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
