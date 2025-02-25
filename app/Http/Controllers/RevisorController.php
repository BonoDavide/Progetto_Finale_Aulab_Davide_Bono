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
}
