<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionRecurrence extends Model
{
    protected $casts = [
        'id' => 'integer',
        'created_by' => 'integer',
    ];

    protected $fillable = [
        'created_by',
    ];
}
