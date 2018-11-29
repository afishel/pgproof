<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionType extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'name' => 'string',
        'is_equipment_based' => 'boolean',
        'is_standard' => 'boolean',
    ];

    protected $fillable = [
        'order',
        'name',
        'is_equipment_based',
        'is_standard',
    ];
}
