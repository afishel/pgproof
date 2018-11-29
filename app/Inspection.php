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
        'scheduled_at' => 'datetime:Y-m-d',
        'started_at' => 'datetime:c',
        'ended_at' => 'datetime:c',
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
}
