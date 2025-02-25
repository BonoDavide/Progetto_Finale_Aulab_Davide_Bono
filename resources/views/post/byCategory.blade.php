<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Articoli della categoria {{$category->name}}</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)
            <div class="col-12">
                <x-card :post="$post"/>
            </div>
            @empty
            <div class="col-12">
                <h3>Non sono ancora stati creati articoli per questa categoria</h3>
                @auth
                    <a class="btn btn-dark" href="{{route("post.create")}}">Pubblica un articolo</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
</x-layout>