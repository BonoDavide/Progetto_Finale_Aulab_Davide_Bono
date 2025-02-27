<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
// #[Validate("required", message: "Inserisci il titolo del film")]

class CreatePost extends Component
{
    use WithFileUploads;
    
    #[Validate("required", message:"inserisci titolo dell articolo")]
    public $title;   
    #[Validate("required", message:"inserisci una cifra del prodotto")]
    #[Validate("numeric", message: "Inserisci un numero valido ")]
    public $price;
    #[Validate("required", message:"inserisci una descrizione")]
    public $description;
    #[Validate("required", message:"seleziona un a categoria")]
    public $category;

    public $images = [];
    public $temporary_images;
    public $post;

    public function createPost()
    {
        $this->validate();
        
        $this->post = Post::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category,
            "user_id" => Auth::user()->id,
        ]);

        if(count($this->images) > 0){
            foreach($this->images as $image){
                $this->post->images()->create([
                    'path' => $image->store('images', 'public')
                ]);
            }
        }

        session()->flash('status', 'Annuncio creato con successo!');
        
        $this->cleanForm();
    }

    protected function cleanForm(){
        $this->title= "";
        $this->price= "";
        $this->description= "";
        $this->category= "";
        $this->images = [];
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            "temporary_images.*" => "image|max:1024",
            "temporary_images" => "max:6"
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-post', compact('categories'));
    }
}
