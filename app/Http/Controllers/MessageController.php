<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class MessageController extends Controller
{
    public function create($id){

        $currentUser = Auth::user();

        if($currentUser){
            $data = [
                'apartmentId' => $id,
                'user' => $currentUser
            ];
        } else {
            $data = [
                'apartmentId' => $id
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
    }
}
