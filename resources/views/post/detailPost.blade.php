<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-between pb-3 align-items-center">
            <div class="col-12 text-center my-5 pt-2 pb-5">
                <h1 class="display-4">{{__("ui.detailTitle")}} {{ $post->title }}</h1>
            </div>
            <div class="col-12 border bordo border-2 p-2 rounded col-md-5">
                @if ($post->images->count() > 0)
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($post->images as $key => $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow cardhome"
                                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $post->title }}">
                                </div>
                            @endforeach
                        </div>

                        @if ($post->images->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                @else
                    <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
            <div class="col-12 col-md-5 text-center">
                <h2 class="card-title pb-5">{{__("ui.createTitle")}}: {{ $post->title }}</h2>
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="card-title pb-5">{{__("ui.createPrice")}}: {{ $post->price }}€</h4>
                    <h5 class="card-title pb-5">{{__("ui.category")}}: {{ $post->category->name }}</h5>
                    <h5 class="card-title pb-5">{{__("ui.createDesc")}}: {{ $post->description }}</h5>

                </div>
            </div>
        </div>
    </div>
</x-layout>
