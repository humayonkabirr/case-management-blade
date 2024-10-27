<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'districts'; // Optional, as Laravel will infer the table name

    protected $fillable = [
        'division_id',
        'name',
        'bn_name',
        'lat',
        'lon',
        'url',
        'status',
    ];

    /**
     * Define the relationship with the Division model.
     */
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    /**
     * Define the relationship with the Upazila model.
     */
    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }
}
