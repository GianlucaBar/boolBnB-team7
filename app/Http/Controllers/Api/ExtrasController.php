<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extra;

class ExtrasController extends Controller
{
    public function index(Request $request){

        
        $extras = Extra::all();

        return response()->json($extras);
    }
}
