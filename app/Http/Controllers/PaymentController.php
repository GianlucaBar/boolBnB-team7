<?php

namespace App\Http\Controllers;

use Braintree\Gateway as Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{   
    // Reinderizza alla pagina col form di pagamento e genera il client token
    public function index(Gateway $gateway)
    {
        // Genero qui il mio clienToken che serve per gestire il pagamento
        $token = $gateway->clientToken()->generate();
        return view('guest.payment', compact('token'));
    }

    // Gli passo sia il gateway sia la Request, sale() gestisce la trnsazione
    public function sale(Gateway $gateway, Request $request) 
    {
        $form_data = $request->all();


        // La roba che passo al gateway la metto in camelCase per convenzione
        $result = $gateway->transaction()->sale(
            // $gateway->transaction()->find($id) cerca per id le varie transazioni, l'id è nel dd in fondo
            [   
                // Il prezzo
                'amount' => $form_data['amount'],
                // Il nonce, cioè il responsabile della transazione
                'paymentMethodNonce' => $form_data['payment_method_nonce'],
                // Id dell'ordine da prendere/passare da un model che gestisca gli ordini/utenti che pagano
                'orderId' => 2,
                // Si può ampliare con altri parametri
                'options' => [
                    'submitForSettlement' => true
                ]
            ]
        );

        // TODO: Cambiare con redirect a route/view di feedback
        if ($result->success) {
 
            $transaction = $result->transaction;
            return back()->with('success_message', 'Transaction Successful. Transaction ID:' . $transaction->id);
 
        } else {
            $errorString = "";
 
            foreach  ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
 
            return back()->withErrors('An error occurred with the message:  ' . $result->message);
        }


        // dd($result);

    }
}
