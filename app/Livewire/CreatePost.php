<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
            "user_id" => Auth::id()
        ]);

        if(count($this->images) > 0){
            foreach($this->images as $image){
                $newFileName = "posts/{$this->post->id}";
                $newImage = $this->post->images()->create(['path' => $image->store($newFileName, 'public')]);
                // dispatch(new ResizeImage($newImage->path, 900, 900));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 900, 900),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
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
        $this->temporary_images = [];
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
