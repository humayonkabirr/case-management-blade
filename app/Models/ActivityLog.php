<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'url',
        'action',
        'model',
        'controller',
        'method',
        'before',
        'after',
        'device',
        'ip',
        'user_agent',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'before' => 'array',
        'after' => 'array',
        'status' => 'integer',
    ];

    /**
     * Get the user who performed the action.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for filtering by status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Format the IP address for display.
     *
     * @return string
     */
    public function getFormattedIpAttribute()
    {
        return $this->ip ?: 'N/A';
    }

    /**
     * Retrieve the changes in a human-readable format.
     *
     * @return string
     */
    public function getChangesAttribute()
    {
        return json_encode([
            'before' => $this->before,
            'after' => $this->after,
        ], JSON_PRETTY_PRINT);
    }
}
