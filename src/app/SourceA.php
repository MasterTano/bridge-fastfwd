<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceA extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    public $fillable = [
        'id',
        'name',
        'details',
    ];

}
