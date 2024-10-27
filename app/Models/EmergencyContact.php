<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmergencyContact extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'relationship',
        'mobile',
        'email',
        'address',
        'status',
    ];

    /**
     * Define the relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
