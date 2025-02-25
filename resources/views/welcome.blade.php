<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-5"></div>
            <h1 class="text-center">Benvenuto!</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 pt-5"></div>
            @if (session('status'))
                <div class="card bg-light alert text-success text-uppercase ">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-4">
            @foreach ($posts as $post)
                <x-card :post="$post"></x-card>
            @endforeach
        </div>
    </div>

</x-layout>
