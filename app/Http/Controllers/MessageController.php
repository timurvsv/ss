<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(){
        return view('message');
    }
    public function createMessage(Request $request)
    {
        $message = new Message();
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return redirect('message')->with('success', 'Ваше обращение принято!');
    }
}
