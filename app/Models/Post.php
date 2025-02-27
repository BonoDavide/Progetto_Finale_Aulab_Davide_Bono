<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use Searchable;

    protected $fillable = ['title', 'price', 'description', 'category_id', "user_id", 'is_accepted'];

    // relazione 1-N con modello User
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
    
    public function setAccepted($value)
    {
        $this -> is_accepted=$value;
        $this->save();
        return true;
    }

    public static function toBeRevisedCount(){
        return Post::where('is_accepted', null)->count();
    }

    public function toSearchableArray(){
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$this->category,
        ];
        
    }public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }
}