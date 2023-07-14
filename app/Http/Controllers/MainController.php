<?php

namespace App\Http\Controllers;

use App\Models\Kut;
use App\Models\Material;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function main()
    {
        $materials = Material::all();
        $products = Product::all();

        return view('index', compact('products', 'materials'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function about($id)
    {

        $kut = Kut::where('kut_id', 'id')->get();


        return view('about', compact('kut', ));
    }



    public function exemple()
    {
        return view('exemple');
    }
}
