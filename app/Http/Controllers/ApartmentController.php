<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Extra;

class ApartmentController extends Controller
{
    public function index()
    {   
        return view('guest.index');
    }

    public function show($id)
    {
        $thisApartment = Apartment::findOrFail($id);
        $extras = $thisApartment->extras;

        $data = [
            'apartment' => $thisApartment,
            'extras' => $extras
        ];

        return view('guest.show', $data);
    }
}
