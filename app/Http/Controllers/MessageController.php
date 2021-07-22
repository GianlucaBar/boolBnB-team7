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
        
        $request->validate($this->getValidationRules());

        $new_msg_data = $request->all();

        $new_message = new Message();

        $new_message->apartment_id = $id;

        $new_message->fill($new_msg_data);

        $new_message->save();

        return redirect()->route('ap-details', ['id' => $id]);
    }


    private function getValidationRules() {
        $validation_rules = [
            'name' => 'required|min:5|max:60',
            'sender_email' => 'nullable|email:rfc,dns|max:255',
            'msg_subject' => 'required|string|min:3|max:255',
            'msg_content' => 'required|string|max:65000',
        ];

        return $validation_rules;
    }
}
