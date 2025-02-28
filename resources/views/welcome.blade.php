<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center"> {{__('ui.hello')}}</h1>
            </div>
        </div>
        @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{ session('errorMessage') }}
        </div>
        @endif
        @if (session()->has('message'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{ session('message') }}
        </div>
        @endif
        
        <div class="row justify-content-evenly">           
            @foreach ($posts as $post)
            <div class="col-4 my-4 d-flex justify-content-center">
                <x-card :post="$post"></x-card>
            </div>
            @endforeach    
        </div>    
    </div>
</x-layout>
