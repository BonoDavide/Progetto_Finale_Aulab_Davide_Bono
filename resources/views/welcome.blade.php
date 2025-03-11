<x-layout>
    <x-header></x-header>
    <div class="container">
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
    </div>
    
    {{-- CATEGORIE --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center display-1 border-bottom">{{__("ui.category")}}</h2>
                
                <div class="container">
                    <div class="row py-5">
                        <div class="col-12">
                            <swiper-container class="mySwiper" slides-per-view=""
                            space-between="30" centered-slides="true">
                            @foreach ($categories as $category) 
                            
                            <swiper-slide class="  position-relative imgcustom2">
                                
                                
                                
                                <a href="{{ route('byCategory', ['category' => $category]) }}">
                                    <img class="" src="{{ $category->img_path }}" alt=""> </a>
                                    <h2 class="position-absolute cat-slide start-50 translate-middle w-100 letter-spacing  text-white bg-dark z-3"> - {{ $category->name }} - </h2>
                                    
                                    
                                </swiper-slide>
                                
                                @endforeach
                                
                                
                            </swiper-container>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- ULTIMI ANNUNCI --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center display-1 border-bottom">{{ __('ui.latestPosts') }}:</h2>
                    
                    
                    
                    <div class="row justify-content-evenly pt-3">
                        @foreach ($posts as $post)
                        <div class="col-4 my-4 d-flex justify-content-center">
                            <x-card :post="$post"></x-card>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
