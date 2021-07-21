<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{   
    protected $fillable = [
        'apartment_id',
        'sender_email',
        'name',
        'msg_subject',
        'msg_content'
    ];

    public function apartments()
    {
        return $this->belongsTo('App\Apartment');
    }
}

