<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center">Benvenuto!</h1>
            </div>
        </div>
        <div class="row justify-content-evenly">           
            @foreach ($posts as $post)
                <div class="col-4 my-4 d-flex justify-content-center">
                    <x-card :post="$post"></x-card>
                </div>
            @endforeach    
        </div>    
    </div>
</x-layout>
