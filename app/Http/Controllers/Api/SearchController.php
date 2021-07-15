<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Extra;
class SearchController extends Controller
{   

    /**
     *
     * @param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        // dd($request->all());

        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $radius = $request->radius;

        $apartments = Apartment::select('apartments.*')
        ->selectRaw('( 6371 * acos( cos( radians(?) ) *
            cos( radians( latitude ) )
            * cos( radians( longitude ) - radians(?)
            ) + sin( radians(?) ) *
            sin( radians( latitude ) ) )
            ) AS distance', [$latitude, $longitude, $latitude])
        ->havingRaw("distance < ?", [$radius])
        // ->leftJoin('apartment_extra', 'apartments.id', '=', 'apartment_extra.apartment_id')
        ->get();

        // $extra = $apartments->extra;
        $extra = $apartments[20]->extras;
        // dd($extra);

        return response()->json($apartments);
    }
}
