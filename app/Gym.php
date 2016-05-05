<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $table = 'gyms';

    protected $fillable = [
        'gym_name',
        'gym_state',
        'gym_city',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
