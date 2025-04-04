<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function showWishlist(){
        
        return view('wishlist.indexWishlist');
    }
}
