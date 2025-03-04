<x-layout>
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <h1 class="text-center textShadow display-3 pb-3"> {{__('ui.hello')}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center shadow rounded w-50 mx-auto">
                    {{ session('errorMessage') }}
                </div>
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success text-center shadow rounded w-50 mx-auto">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        <div>
            <h3 class="text-center pt-5">{{__('ui.latestPosts')}}:</h3>
        </div>
        <div class="row border border-2 border-dark lastPosts justify-content-evenly pt-3 borderForm">           
            @foreach ($posts as $post)
            <div class="col-4 my-4 d-flex justify-content-center">
                <x-card :post="$post"></x-card>
            </div>
            @endforeach    
        </div>    
    </div>
</x-layout>
