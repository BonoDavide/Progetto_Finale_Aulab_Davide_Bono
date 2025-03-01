<x-layout>
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <h1 class="text-center textShadow display-3 pb-3"> {{__('ui.hello')}}</h1>
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
        <div>
            <h4 class="text-center pt-5">{{__('ui.latestPosts')}}:</h4>
        </div>
        <div class="row border border-2 border-dark lastPosts justify-content-evenly pt-3">           
            @foreach ($posts as $post)
            <div class="col-4 my-4 d-flex justify-content-center">
                <x-card :post="$post"></x-card>
            </div>
            @endforeach    
        </div>    
    </div>
</x-layout>
