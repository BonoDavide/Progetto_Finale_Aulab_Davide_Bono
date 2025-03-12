<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class IndexWishlist extends Component
{

    public $posts;

    public function mount()
    {
        $this->posts = Auth::user()->wishPosts;
    }
    
    #[On('updateWishlistIndex')] 
    public function update()
    {
        $this->posts = Auth::user()->wishPosts;
    }
    
    public function render()
    {
        
        return view('livewire.index-wishlist');
    }
}
