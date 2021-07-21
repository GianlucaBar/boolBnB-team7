<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Extra;
class SearchController extends Controller
{   
    public function index(Request $request){

        // Data taken from input when you search apartments
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $radius = $request->radius;

        // Haversine Formula
        $apartments = Apartment::select('apartments.*')
        ->selectRaw('( 6371 * acos( cos( radians(?) ) *
            cos( radians( latitude ) )
            * cos( radians( longitude ) - radians(?)
            ) + sin( radians(?) ) *
            sin( radians( latitude ) ) )
            ) AS distance', [$latitude, $longitude, $latitude])
        ->havingRaw("distance < ?", [$radius])->where('visible', '1')
        ->get();

        // Link extras to every apartment
        foreach($apartments as $apartment){
            if($apartment->extras){
                $extras = $apartment->extras;
            }   
        }


        return response()->json($apartments);
    }
}
