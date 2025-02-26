<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPost extends Component
{
    public function render()
    {
       
        $posts = Post::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(10);
       /*  $posts = array_reverse($posts->toArray()); */
        return view('livewire.index-post',compact('posts'));

    }
}
