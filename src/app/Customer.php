<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = [
        'idSourceA',
        'idSourceB',
        'modifiedSourceA',
        'modifiedSourceB',
        'modified',
        'active',
    ];

    protected $casts = [
        'modifiedSourceA' => 'datetime:Y-m-d H:i:s',
        'modifiedSourceB' => 'datetime',
        'modified' => 'datetime',
    ];
    

    public $timestamps = false;


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
