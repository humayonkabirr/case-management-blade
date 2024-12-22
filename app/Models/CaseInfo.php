<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseInfo extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'case_type_id',
        'court_id',
        'advocate_id',
        'created_by',
        'title',
        'bn_title',
        'case_no',
        'tender_no',
        'priority',
        'state',
        'serial',
        'status',
    ];

    /**
     * Relationship: Case Type
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function caseType()
    {
        return $this->belongsTo(CaseType::class, 'case_type_id');
    }

    /**
     * Relationship: Court
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }

    /**
     * Relationship: Advocate (User)
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function advocate()
    {
        return $this->belongsTo(User::class, 'advocate_id');
    }

    /**
     * Relationship: Created By (User)
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
