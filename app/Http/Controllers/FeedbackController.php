<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->feedback = $request->feedback;
        $feedback->save();

        return redirect('contact')->with('success', 'Ваше обращение принято!');
    }




}
