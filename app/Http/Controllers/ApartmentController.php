<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;

class ApartmentController extends Controller
{
    public function index()
    {   
        return view('guest.index');
    }

    public function show($id)
    {
        $thisApartment = Apartment::findOrFail($id);

        $data = [
            'apartment' => $thisApartment
        ];
        return view('guest.show', $data);
    }
}
