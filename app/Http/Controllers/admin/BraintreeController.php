<?php

namespace App\Http\Controllers\Admin;

use Braintree\Gateway as Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Sponsorship;
use Carbon\Carbon;

class BraintreeController extends Controller
{   

    public function index(Gateway $gateway, $id, $thisApartmentId)
    {
        // generate token
        $token = $gateway->clientToken()->generate();
        $sponsorship = Sponsorship::findOrFail($id);
        
        $data = [
            'token' => $token,
            'sponsorship' => $sponsorship,
            'thisApartmentId' => $thisApartmentId
        ];

        return view('admin.payment', $data);
    }

    // Gli passo sia il gateway sia la Request, sale() gestisce la trnsazione
    public function sale(Gateway $gateway, Request $request) 
    {   
        $form_data = $request->all();

        //setting current date/time
        $start_date = Carbon::now();

        // with this query i get the last entry in apartments_sponsorship for current apartment id 
        $lastEntry = DB::table('apartment_sponsorship')->where('apartment_id', [$form_data['thisApartmentId']])->orderBy('end_date', 'DESC')->first();

        // get end_date of last entry 
        $lastEndDate = $lastEntry->end_date;

        //parse dates to compare them 
        $parsedNow = strtotime($start_date);
        $parsedEnd = strtotime($lastEndDate);

        // if query return result && last known end_date is not expired
        if($lastEntry && $parsedEnd > $parsedNow){
            //set base date to last known end_date
            $base_date = Carbon::parse($lastEndDate);
        } else{
            //base date remain current
            $base_date = $start_date;
        }

        // check what sponsorhpip plan is being purchased 
        if ($form_data['sponsorshipId'] == 1) {

            //set price and end_date for each case
            $amount = 2.99;
            $end_date = $base_date->addHours(24);

        } else if ($form_data['sponsorshipId'] == 2) {

            $amount = 5.99;
            $end_date = $base_date->addHours(72);

        } else if ($form_data['sponsorshipId'] == 3) {

            $amount = 9.99;
            $end_date = $base_date->addHours(144);

        }

        // La roba che passo al gateway la metto in camelCase per convenzione
        $result = $gateway->transaction()->sale(
            // $gateway->transaction()->find($id) cerca per id le varie transazioni, l'id è nel dd in fondo
            [ 
                'amount' => $amount,
                // Il nonce, cioè il responsabile della transazione
                'paymentMethodNonce' => $form_data['payment_method_nonce'],
                // Id dell'ordine da prendere/passare da un model che gestisca gli ordini/utenti che pagano
                // Si può ampliare con altri parametri
                'options' => [
                    'submitForSettlement' => true
                ]
            ]
        );

        // TODO: Cambiare con redirect a route/view di feedback
        if ($result->success) {
            
            //saving datas in apartment_sponsorship table
            DB::table('apartment_sponsorship')->insert([
                'apartment_id' => $form_data['thisApartmentId'],
                'sponsorship_id' => $form_data['sponsorshipId'],
                'start_date' => $start_date,
                'end_date' => $end_date,
                'payment_status' => 1
            ]);

            $transaction = $result->transaction;
            return back()->with('success_message', 'Transaction Successful. Transaction ID:' . $transaction->id);
 
        } else {
            $errorString = "";
 
            foreach  ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
 
            return back()->withErrors('An error occurred with the message:  ' . $result->message);
        }


    }
}
