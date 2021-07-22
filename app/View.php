<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class View extends Model
{   

    public static function createViewLog($id) {

        $now = Carbon::now();

        $nowParsed = $now->format('Y-m');

        $views= new View();
        $views->apartment_id = $id;
        $views->date_month_year = $nowParsed;
        $views->save();
    }

    public function apartments()
    {
        return $this->belongsTo('App\Apartment');
    }
}
