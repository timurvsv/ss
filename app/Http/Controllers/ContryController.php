<?php

namespace App\Http\Controllers;

use App\Models\Contry;
use Illuminate\Http\Request;

class ContryController extends Controller
{
    public function createSvaze(Request $request)
    {
        $svaze = new Svaze();

        $svaze->name = $request->name;
        $svaze->email = $request->email;
        $svaze->sunject = $request->sunject;
        $svaze->text = $request->text;
        $svaze->save();

        return view('svaze');
    }
}
