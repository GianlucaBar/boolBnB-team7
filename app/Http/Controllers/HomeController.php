<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Apartment;
use App\Sponsorship;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {   
        $now = Carbon::now();

        $nowParsed = $now->format('Y-m-d H:i:s');

        $inProgress = DB::table('apartment_sponsorship')->whereDate('end_date', '>=', $nowParsed)->get();

        $sponsoredApIds = [];

        foreach ($inProgress as $entry) {
            
            $apartmentId = $entry->apartment_id;
            if(!in_array($apartmentId, $sponsoredApIds)){
                array_push($sponsoredApIds, $apartmentId);
            }
        }

        $sponsoredArray = [];
        foreach ($sponsoredApIds as $id) {
            $sponsoredAp = Apartment::findOrFail($id);
            if($sponsoredAp){
                array_push($sponsoredArray, $sponsoredAp);
            }
        }

        $data = [
            'sponsored' => $sponsoredArray
        ];


        return view('guest.home', $data);
    }
}
