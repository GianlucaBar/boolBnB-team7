<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\Apartment;

class MessageController extends Controller
{
    public function show($id){

        $thisMessage = Message::findOrFail($id);

        $data = [
            'message' => $thisMessage
        ];

        return view('admin.message', $data);
    }
}
