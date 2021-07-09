<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    public function apartments()
    {
        return $this->belongsToMany('App\Apartment');
    }
}
