<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'status',
        'start_time',
        'stop_time',
        'user_id',
        'rate',
        'start_rate',
        'stop_rate',
    ];

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
