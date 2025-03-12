<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\IndexWishlist;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Component
{

    // public $user_id;
    public $post_id;
    public $isFavorited = false;
    
    public function mount(){

        

        if (Auth::user()->wishPosts()->where('post_id', $this->post_id)->exists()) {
            $this->isFavorited = true;
        }
    }
    public function addToWishList(){

        $user = User::find(Auth::user()->id);

        if ($user->wishPosts()->where('post_id', $this->post_id)->exists()) {
            $user->wishPosts()->detach($this->post_id);
            $this->isFavorited = false;
        } else {
            $user->wishPosts()->attach($this->post_id);
            $this->isFavorited = true;
        }

        $this->dispatch('updateWishlistIndex');
    }
    public function render()
    {
        return view('livewire.wishlist');
    }
}
