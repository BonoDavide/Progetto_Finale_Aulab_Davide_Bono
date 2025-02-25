<div>
    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($posts as $post)
                <div class="col-4 d-flex justify-content-center my-4">
                    <x-card :post="$post"></x-card>
                </div>
            @endforeach
        </div>
    </div>
</div>
