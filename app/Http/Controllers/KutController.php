<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Kut;
use Illuminate\Http\Request;

class KutController extends Controller
{
    public function store(Request $request)
    {
        $kut = new kut();
        $kut->name = $request->name;
        $kut->email = $request->email;
        $kut->text = $request->text;
        $kut->kut_id = $request->kut_id;
        $kut->save();

        return redirect()->back();
    }
}
