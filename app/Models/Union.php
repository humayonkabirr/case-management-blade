<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Union extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'unions'; // Optional, as Laravel will infer the table name

    protected $fillable = [
        'upazilla_id',
        'name',
        'bn_name',
        'url',
        'status',
    ];

    /**
     * Define the relationship with the Upazila model.
     */
    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }
}
