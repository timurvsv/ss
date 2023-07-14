<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request, $id){
        $comment = new Comment();
        $comment['name']=$request['name'];
        $comment['coment']=$request['coment'];
        $comment['email']=$request['email'];
        $comment['product_id']=$id;
        $comment->save();
        return  redirect()->back();
    }
}
