<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionStatus extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'name' => 'string',
    ];

    protected $fillable = [
        'order',
        'name',
    ];
}
