<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index() {

        $post_to_check = Post::where("is_accepted", null)->first();
        return view("revisor.index", compact("post_to_check"));
    }

    public function accept(Post $post){
        $post->setAccepted(true);
        return redirect()
        ->back()
        ->with('message',"Hai accettato l'articolo $post->title");
    }

    public function reject(Post $post){
        $post->setAccepted(false);
        return redirect()
        ->back()
        ->with('message',"Hai rifiutato l'articolo $post->title");
    }
}
