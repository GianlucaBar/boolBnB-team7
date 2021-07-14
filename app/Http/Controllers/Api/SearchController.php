<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Extra;
class SearchController extends Controller
{   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

        // dd($apartments);

        return response()->json($apartments);
    }
}
