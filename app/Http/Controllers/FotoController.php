<?php

namespace App\Http\Controllers;

use App\Models\Fotoproduct;
use App\Models\Tovar;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function fotoproduct()
    {
        $fotoproducts = Fotoproduct::all();
        return view('foto', compact('fotoproducts'));
    }

    public function tovar()
    {
        $tovars = Tovar::all();
        return view('toto', compact('tovars'));
    }
}
