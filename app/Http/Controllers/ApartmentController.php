<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Extra;

class ApartmentController extends Controller
{
    public function index(Request $request){

        dd($request->all());

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
        $data = [
            'searchResult' => $apartments
        ];

        return view('guest.index', $data);
    }

    public function show()
    {
        // return view('guest.home');
    }
}
