<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class CreatePost extends Component
{
    public $title;
    public $price;
    public $description;
    public $category;

    public function createPost()
    {
        $user = Auth::user();
        $user->posts()->create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category
        ]);
        session()->flash('status', 'Annuncio creato con successo!');
        return redirect(route('homePage'));
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-post', compact('categories'));
    }
}
