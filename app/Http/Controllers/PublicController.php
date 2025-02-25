<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homePage(){
        $posts = Post::orderBy('created_at', 'desc')->take(6)->get();
        return view("welcome",compact("posts"));
    }

    
}
