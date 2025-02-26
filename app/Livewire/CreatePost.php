<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
// #[Validate("required", message: "Inserisci il titolo del film")]

class CreatePost extends Component
{
    #[Validate("required", message:"inserisci titolo dell articolo")]
    public $title;
    
    #[Validate("required", message:"inserisci una cifra del prodotto")]
    #[Validate("numeric", message: "Inserisci un numero valido ")]
    public $price;
    #[Validate("required", message:"inserisci una descrizione")]
    public $description;
    #[Validate("required", message:"seleziona un a categoria")]
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
