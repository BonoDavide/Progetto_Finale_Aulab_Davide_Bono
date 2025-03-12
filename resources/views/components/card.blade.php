<div class="container card min-w-100">
    <div class="row min-w-100 ">
        <div class=" border-3 p-0 justify-content-center d-flex min-w-100">
            <div id="carouselExample{{$post->id}}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($post->images as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="card-img-top cardhome" src="{{ $image->getUrl(900, 900) }}"
                                alt="Immagine dell'articolo {{ $post->title }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{$post->id}}"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{$post->id}}"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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
            <a href="{{ route('post.detailPost', compact('post')) }}"
                class="btn btn-primary">{{ __('ui.detailProduct') }}</a>
        </div>
       @auth
            <livewire:wishlist :post_id="$post->id"/>
       @endauth
            
        
        

    </div>




</div>
