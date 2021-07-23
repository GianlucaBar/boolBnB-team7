<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Apartment;
use App\View;

class StatsController extends Controller
{
    public function getApartments($userId){

        $user = Auth::id();

        $apartments = Apartment::where('user_id', $userId)->get();

        $apartmentsIds = [];
        foreach($apartments as $apartment){
            array_push($apartmentsIds, $apartment->id);
        }

        return response()->json($apartmentsIds);
    }

    public function getStats($apartmentId){

        $stats = View::where('apartment_id', $apartmentId)->get();

        dd($stats);

    }
}


