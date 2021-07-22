<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{   

    protected $fillable = [
        'title',
        'description',
        'slug',
        'rooms',
        'beds',
        'baths',
        'square_meters',
        'price',
        'address',
        'latitude',
        'longitude',
        'cover',
        'visible'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function views()
    {
        return $this->hasMany('App\View');
    }

    public function sponsorships()
    {
        return $this->belongsToMany('App\Sponsorship');
    }

    public function extras()
    {
        return $this->belongsToMany('App\Extra');
    }
}
