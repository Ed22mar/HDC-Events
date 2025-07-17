<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //cast na models
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    //function para a user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //function para a users
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
