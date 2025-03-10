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
                            <swiper-slide class="  position-relative imgcustom2">
                                <img class="" src="{{ asset('img/categoria_telefoni2.jpg') }}" alt="">
                                <h4 class="position-absolute cat-slide start-50 translate-middle  text-white bg-dark z-3">Telefoni</h4>
                                
                            </swiper-slide>
                            
                            <swiper-slide class="position-relative imgcustom2 ">
                                <img class="" src="{{ asset('img/categoria_tablet.jpg') }}" alt="">
                            </swiper-slide>
                            
                            
                            <swiper-slide class="position-relative imgcustom2">
                                <img class="" src="{{ asset('img/categoria_laptop.jpg') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="position-relative imgcustom2">
                                <img class="" src="{{ asset('img/categoria_PC_fisso.jpg') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/categoria_smartwatch.jpg') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/categoria_console.jpg') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/categoria_tablet.jpg') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/periferiche.png') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/haardware.png') }}" alt="">
                            </swiper-slide>
                            <swiper-slide class="imgcustom2 position-relative">
                                <img class="" src="{{ asset('img/categoria_energia.png') }}" alt="">
                            </swiper-slide>
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
