<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery() {
        $tanks = Tank::all();
        return view('gallery', compact('tanks'));
    }


}
