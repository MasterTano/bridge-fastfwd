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
        'modifiedSourceB' => 'datetime:Y-m-d H:i:s',
        'modified' => 'datetime:Y-m-d H:i:s',
    ];

    public $timestamps = false;

    public function sourceA()
    {
        return $this->belongsTo(SourceA::class, 'idSourceA', 'id');
    }

    public function sourceB()
    {
        return $this->belongsTo(SourceB::class, 'idSourceB', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1)->whereNotIn('idSourceA', function($query) {
            return self::scopeHasDuplicate($query);
        });
    }

    public function scopeDuplicated($query)
    {
        return $query->whereIn('idSourceA', function($query) {
            return self::scopeHasDuplicate($query);
        });
    }

    public function scopeHasDuplicate($query)
    {
        return $query->select('idSourceA')
            ->from('customers')
            ->where('active', 1)
            ->groupBy('idSourceA')
            ->havingRaw('count(idSourceA) > 1');
    }

}
