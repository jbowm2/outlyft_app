<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'nickname',
        'sex',
        'skill_level',
        'bio',
        'gym_id',
        'class_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gym()
    {
        return $this->hasOne('App\Gym');
    }

    public function weightClass()
    {
        return $this->hasOne('App\WeightClass');
    }


}
