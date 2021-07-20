<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsorship;

class SponsorshipController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $sponsorship = Sponsorship::all();

        $data = [
            'sponsorships'=> $sponsorship,
            'thisApartmentId' => $id
        ];

        return view('admin.sponsorship', $data);
    }
}
