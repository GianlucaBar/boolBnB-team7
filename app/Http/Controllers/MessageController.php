<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Apartment;

class MessageController extends Controller
{
    public function create($id){

        $currentUser = Auth::user();

        $thisApartment = Apartment::findOrFail($id);
        
        if($currentUser){
            $data = [
                'apartment' => $thisApartment,
                'user' => $currentUser
            ];
        } else {
            $data = [
                'apartment' => $thisApartment
            ];
        }


        return view('guest.message', $data);
    }

    public function store(Request $request, $id){
        
        $new_msg_data = $request->all();

        $new_message = new Message();

        $new_message->apartment_id = $id;

        $new_message->fill($new_msg_data);

        $new_message->save();

        return redirect()->route('ap-details', ['id' => $id]);
    }
}
