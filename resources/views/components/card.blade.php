<div class="card border-3" style="width: 18rem;">
    <img src="{{ $post->images->isNotEmpty() ? $post->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
        class="card-img-top" alt="Immagine dell'articolo {{ $post->title }}">

    <div class="card-body">
        <h2 class="h5 card-title text-white">{{ $post->title }}</h2>
        <h5 class="card-title text-white">{{ $post->price }}€</h5>
        <h5 class="card-title">{{ $post->category->name }}</h5>
        <p class="card-title text-white">{{ $post->description }}</p>
        <a href="{{ route('post.detailPost', compact('post')) }}" class="btn btn-primary">Dettaglio prodotto</a>
    </div>
</div>
