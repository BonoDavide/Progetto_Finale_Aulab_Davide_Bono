<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
 
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <h5 class="card-title">{{ $post->price }}</h5>
        <h5 class="card-title">{{ $post->category->name }}</h5>
        <p class="card-text">{{ $post->description }}</p>
        <a href="{{route('post.detailPost',compact('post'))}}" class="btn btn-primary">Dettaglio prodotto</a>
    </div>
</div>
