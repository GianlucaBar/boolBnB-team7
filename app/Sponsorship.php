<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    // I've added this protected due to an error whit price column in sposorship seeder. I leave it here
    // while I think it can be useful
    
    // protected $fillable = [
    //     'name',
    //     'price',
    //     'duration',
    // ];

    public function apartments()
    {
        return $this->belongsToMany('App\Apartment');
    }
}
