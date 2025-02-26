<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homePage(){
        $posts = Post::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view("welcome",compact("posts"));
    }

    public function searchPost(Request $request){
        $query = $request->input('query');
        $posts = Post::search($query)->where('is_accepted', true)->paginate(10);
        return view("post.searched",["posts"=>$posts, "query"=>$query] );
    }
    
}
