<x-layout>
    <div class="container">
        <div class="row text-center pt-5">
            <div class="col-12">
                <h1 class="display-4">Articoli della categoria {{$category->name}}</h1>
            </div>
        </div>
        <div class="row text-center pt-5">
            @forelse ($posts as $post)
            <div class="col-4">
                <x-card :post="$post"/>
            </div>
            @empty
            <div class="col-12 pt-5 pb-1">
                <h3>Non sono ancora stati creati articoli per questa categoria</h3>
                <div class="col-12 pt-5 pb-5">
                    @auth
                        <a class="btn btn-dark" href="{{route("post.create")}}">Pubblica un articolo</a>
                    @endauth
                </div>
            </div>
            @endforelse
        </div>
        <div class="pt-5 pb-5"></div>
    </div>
</x-layout>