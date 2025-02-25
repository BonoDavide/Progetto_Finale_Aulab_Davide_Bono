<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPost extends Component
{
    public function render()
    {
       
        $posts = Post::orderBy('created_at', 'desc')->get();
       /*  $posts = array_reverse($posts->toArray()); */
        return view('livewire.index-post',compact('posts'));

    }
}
