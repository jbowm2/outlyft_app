<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeightClass extends Model
{
    protected $table = 'weight_class';

    protected $fillable = [
        'name',
        'weight',
        'sex',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
