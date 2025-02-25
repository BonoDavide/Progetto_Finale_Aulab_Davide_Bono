<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware("auth", only: ["create"])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.indexPost');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.detailPost',compact('post'));
    }

    public function byCategory(Category $category) {

        return view("post.byCategory", ["posts"=> $category->posts, "category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
