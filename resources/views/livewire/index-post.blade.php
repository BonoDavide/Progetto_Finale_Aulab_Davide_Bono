<div>

    <div>
        <h2 class="text-center">Ultimi Articoli</h2>

        @foreach ($posts as $post)
            <div class="col-4">
                <x-card :post="$post">

                </x-card>
            </div>
        @endforeach

    </div>
</div>
