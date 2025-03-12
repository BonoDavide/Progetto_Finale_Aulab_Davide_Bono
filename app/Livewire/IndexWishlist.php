<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class IndexWishlist extends Component
{

    public function updateWishList($id){       
        Auth::user()->wishPosts()->detach($id);
    }
    
    public function render()
    {       
        return view('livewire.index-wishlist', ["posts"=>Auth::user()->wishPosts]);
    }
}
