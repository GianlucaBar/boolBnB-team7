<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        dd($request->all());
        // $apartments = Apartment::select('apartments.*')
        // ->selectRaw('( 6371 * acos( cos( radians(?) ) *
        //                    cos( radians( lat ) )
        //                    * cos( radians( lon ) - radians(?)
        //                    ) + sin( radians(?) ) *
        //                    sin( radians( lat ) ) )
        //                  ) AS distance', [$latitude, $longitude, $latitude])
        // ->havingRaw("distance < ?", [$radius])
        // ->get();

        // return $offers;


    }
}
