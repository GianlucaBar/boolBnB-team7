<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;

class HomeController extends Controller
{
    public function index()
    {   

        $info = 'bella la vita';

        JavaScript::put([
            'test' => 'bella la vita'
        ]);

        return view('guest.home');
    }
}
