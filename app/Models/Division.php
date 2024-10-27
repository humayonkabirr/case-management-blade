<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'divisions'; // Optional, as Laravel will infer the table name

    protected $fillable = [
        'name',
        'bn_name',
        'url',
        'status',
    ];

    /**
     * Define the relationship with the District model.
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
