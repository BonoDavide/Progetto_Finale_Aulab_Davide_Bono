<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="rounded shadow bg-body-secondary">
                    <h1 class="display-5 text-center pb-2">Revisor Dashboard</h1>
                </div>
            </div>
        </div>
        @if ($post_to_check)
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @for ($i=0; $i<6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img class="img-fluid rounded shadow" src="https://picsum.photos/200" alt="immagine segnaposto">
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1>{{$post_to_check->title}}</h1>
                        <h3>Autore: {{$post_to_check->user->name}}</h3>
                        <h4>{{$post_to_check->price}}€</h4>
                        <h4 class="fst-italic text-muted">#{{$post_to_check->category->name}}</h4>
                        <p class="h6">{{$post_to_check->description}}</p>
                    </div>
                    <div class="d-flex pb-4 justify-content-around">
                        <form action="" method="POST">
                            @csrf
                            <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                        </form>
                        <form action="" method="POST">
                            @csrf
                            <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom">
                <div class="col-12">
                    <h1 class="fst-italic display-4">Nessun articolo da revisionare</h1>
                    <a class="mt-5 btn btn-success" href="{{route("homePage")}}">Torna alla homepage</a>
                </div>
            </div>
        @endif
    </div>
    
</x-layout>