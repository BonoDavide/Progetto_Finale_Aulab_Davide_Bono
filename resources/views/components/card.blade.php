<div class="container card min-w-100">
    <div class="row min-w-100 ">
        <div class=" border-3 p-0 justify-content-center d-flex min-w-100" >
            <img class="card-img-top cardhome"src="{{ $post->images->isNotEmpty() ? $post->images->first()->getUrl(900, 900) : 'https://picsum.photos/200' }}"
             alt="Immagine dell'articolo {{ $post->title }}">
            
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            <h2 class="h5 tronca card-title text-white">{{ $post->title }}</h2>
            <h5 class="card-title text-white">{{ $post->price }}€</h5>
            <h5 class="tronca card-title">{{ $post->category->name }}</h5>
            <p class="tronca card-title text-white">{{ $post->description }}</p>
            
        </div>
    </div>
    <div class="row ">
        
        <div class="pb-2  d-flex justify-content-center position-relative">
            <a href="{{ route('post.detailPost', compact('post')) }}" class="btn btn-primary">{{__('ui.detailProduct')}}</a>
        </div>
    </div>
    
    
    
    
</div>