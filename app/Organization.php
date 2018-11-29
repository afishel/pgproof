<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use SoftDeletes;

    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'company_id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
    ];

    protected $fillable = [
        'uuid',
        'company_id',
        'name',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'email',
    ];
}
