<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inspection extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'site_id' => 'integer',
        'inspection_status_id' => 'integer',
        'inspection_type_id' => 'integer',
        'inspector_id' => 'integer',
        'inspection_recurrence_id' => 'integer',
        'autocomplete' => 'boolean',
        'comments' => 'string',
        'scheduled_at' => 'datetime',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    protected $fillable = [
        'uuid',
        'site_id',
        'inspection_status_id',
        'inspection_type_id',
        'inspector_id',
        'inspection_recurrence_id',
        'autocomplete',
        'comments',
        'scheduled_at',
        'started_at',
        'ended_at',
    ];

    public function site()
    {
        return $this->belongsTo('App\Site');
    }

    public function inspectionStatus()
    {
        return $this->belongsTo('App\InspectionStatus');
    }

    public function inspectionType()
    {
        return $this->belongsTo('App\InspectionType');
    }

    public function inspectionRecurrence()
    {
        return $this->belongsTo('App\InspectionRecurrence');
    }

    public function inspector()
    {
        return $this->belongsTo('App\User', 'inspector_id');
    }
}
