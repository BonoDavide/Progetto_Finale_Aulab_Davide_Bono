<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreatePost extends Component
{
    #[Validate("required|min:5")]
    public $title;
    #[Validate("required|numeric")]
    public $price;
    #[Validate("required|min:10")]
    public $description;
    #[Validate("required")]
    public $category;

    public function createPost()
    {
        $this->validate();
        
        $user = Auth::user();
        $user->posts()->create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category
        ]);
        session()->flash('status', 'Annuncio creato con successo!');
        
        $this->cleanForm();
    }

    protected function cleanForm(){
        $this->title= "";
        $this->price= "";
        $this->description= "";
        $this->category= "";
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-post', compact('categories'));
    }
}
