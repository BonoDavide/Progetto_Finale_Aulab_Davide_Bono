<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class DetailPost extends Component
{
    public $postId;
    
    public function render()
    {
        $post=Post::find('$this->postId');
        return view('livewire.detail-post',compact('post'));
    }
}
