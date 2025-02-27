<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 text-center my-5">
                <h1>Pagina dettaglio di {{$post->title}}</h1>
            </div>
            <div class="col-12 col-md-6 mb-3">
              @if ($post->images->count() > 0)
                  <div id="carouselExample" class="carousel slide">
                      <div class="carousel-inner">
                          @foreach ($post->images as $key => $image)
                              <div class="carousel-item @if ($loop->first) active @endif">
                                  <img src="{{ Storage::url($image->path) }}" class="d-block w-100 rounded shadow"
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
            <div class="col-12 col-md-6 text-center">                                                 
                <h2 class="card-title display-5 mb-3">Titolo: {{ $post->title }}</h2>
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="card-title mb-3">Prezzo: {{ $post->price }}€</h4>
                    <h5 class="card-title mb-3">Categoria: {{ $post->category->name }}</h5>
                    <h5 class="card-title mb-3">Descrizione: {{ $post->description }}</h5>                    

                </div>
            </div>
          </div>
    </div>
</x-layout>