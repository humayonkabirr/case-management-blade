<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'experiences';

    protected $fillable = [
        'user_id',
        'company_name',
        'job_title', 
        'responsibilities',
        'start_date',
        'end_date',
        'location',
        'is_current',
        'supervisor_name',
        'supervisor_mobile',
        'supervisor_email',
        'employment_type',
        'salary',
        'status'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean', 
        'status' => 'integer'
    ];

    /**
     * Get the user that owns the experience.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include active experiences.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get the employment type as a readable format.
     */
    public function getEmploymentTypeAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Check if the experience is current.
     */
    public function isCurrent()
    {
        return $this->is_current;
    }
}
