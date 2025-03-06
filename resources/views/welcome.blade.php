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
    
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <swiper-container class="mySwiper" slides-per-view=""
                    space-between="30" centered-slides="true">
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_telefoni2.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_tablet.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_laptop.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_PC_fisso.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_smartwatch.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_console.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_tablet.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_console.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_smartwatch.jpg') }}" alt="">
                    </swiper-slide>
                    <swiper-slide class="imgcustom2">
                        <img class="" src="{{ asset('img/categoria_telefoni2.jpg') }}" alt="">
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
        <div>
            <h3 class="text-center pt-5">{{ __('ui.latestPosts') }}:</h3>
        </div>
        <div class="row justify-content-evenly pt-3">
            @foreach ($posts as $post)
                <div class="col-4 my-4 d-flex justify-content-center">
                    <x-card :post="$post"></x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
