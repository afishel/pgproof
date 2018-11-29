<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'name' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phone' => 'string',
        'phone2' => 'string',
        'website' => 'string',
        'contact' => 'string',
        'sales_person' => 'string',
        'lead_source' => 'string',
        'logo' => 'string',
        'auto_complete_inspections' => 'boolean',
    ];

    protected $fillable = [
        'uuid',
        'name',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'phone2',
        'website',
        'contact',
        'sales_person',
        'lead_source',
        'logo',
        'auto_complete_inspections',
    ];
}
