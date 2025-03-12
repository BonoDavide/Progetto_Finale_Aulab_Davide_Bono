 <x-layout>
    
    <div class="container d-flex flex-column">
        <div class="row justify-content-center pt-5 flex-grow-1">
            <div class="col-12 col-md-5">
                <div class="rounded bordo">
                    <h1 class="display-5 text-center ">{{ __('ui.revisorDashboard') }}</h1>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
        <div class="row pt-5 justify-content-center">
            <div class="col-12 alert alert-success text-center shadow rounded w-50 mx-auto">
                {{ session('message') }}
            </div>
        </div>
        @endif
    </div>
    @if ($post_to_check)
    <div class="container-fluid d-flex flex-column pt-5">
        <div class="row justify-content-center pb-5 pt-3">
            <div class="col-12 col-md-3 pe-5">
                @if ($post_to_check->images->count())
                <div class="row justify-content-evenly">
                    {{-- @foreach ($post_to_check->images as $key => $image)
                    <div class="col-6 ">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-12 mb-4 text-center ">
                                    <img src="{{ $image->getUrl(900, 900) }}" class="card-img-top cardhome"
                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $post_to_check->title }}'">
                                </div>
                                <div class="col-mb-5 ps-3">
                                    <div class="card-body ">
                                        <h5 class="">Labels</h5>
                                        @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                        {{ $label }},
                                        @endforeach
                                        @else
                                        <p class="fst-italic">No Labels</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8 ps-3">
                                    <div class="card-body">
                                        <h5 class="">rating</h5>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->adult }}"></div>
                                            </div>
                                            <div class="col-10">Adult</div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->racy }}"></div>
                                            </div>
                                            <div class="col-10">Racy</div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->violence }}">
                                                </div>
                                            </div>
                                            <div class="col-10">Violence</div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->spoof }}"></div>
                                            </div>
                                            <div class="col-10">Spoof</div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->medical }}">
                                                </div>
                                            </div>
                                            <div class="col-10">Medical</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    <div class="col-12">
                        <div class="card mb-3">
                            <!-- Carousel per le immagini -->
                            <div id="carouselPost{{ $post_to_check->id }}" class="carousel slide d-flex justify-content-center" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($post_to_check->images as $key => $image)
                                        <div class="carousel-item    @if($key == 0) active @endif">
                                            <img src="{{ $image->getUrl(300, 300) }}" class="d-block imgcustom3  w-100 p-1" alt="Immagine {{ $key + 1 }} dell'articolo '{{ $post_to_check->title }}'">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPost{{ $post_to_check->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Precedente</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPost{{ $post_to_check->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Successivo</span>
                                </button>
                            </div>
                    
                            <!-- Corpo della card con le sezioni separate -->
                       
                           
                            
                            <div class="card-body">
                                <!-- Sezione Labels -->
                                <div class="mb-3 ps-3">
                                    <h5 class="card-title">Labels</h5>
                                    @php
                                        $labels = $post_to_check->images->first()->labels ?? [];
                                    @endphp
                                    @if(count($labels))
                                        <p class="card-text">
                                            @foreach($labels as $label)
                                                {{ $label }}@if(!$loop->last), @endif
                                            @endforeach
                                        </p>
                                    @else
                                        <p class="fst-italic">No Labels</p>
                                    @endif
                                </div>
                    
                                <hr>
                    
                                <!-- Sezione Rating -->
                                <div class="ps-3">
                                    <h5 class="card-title">Rating</h5>
                                    <div class="row mb-2">
                                        <div class="col-2 text-center">
                                            <div class="{{ $post_to_check->images->first()->adult }}"></div>
                                        </div>
                                        <div class="col-10">Adult</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-2 text-center">
                                            <div class="{{ $post_to_check->images->first()->racy }}"></div>
                                        </div>
                                        <div class="col-10">Racy</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-2 text-center">
                                            <div class="{{ $post_to_check->images->first()->violence }}"></div>
                                        </div>
                                        <div class="col-10">Violence</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-2 text-center">
                                            <div class="{{ $post_to_check->images->first()->spoof }}"></div>
                                        </div>
                                        <div class="col-10">Spoof</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <div class="{{ $post_to_check->images->first()->medical }}"></div>
                                        </div>
                                        <div class="col-10">Medical</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-5 mb-4 text-center">
                                <img class="img-fluid rounded shadow cardhome"
                                src="https://picsum.photos/200" alt="immagine segnaposto">
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-12 col-md-3 d-flex flex-column justify-content-between ps-5">
                <div>
                    <h1 class="pb-5 fw-bold">{{ $post_to_check->title }}</h1>
                    <h1 class="pb-5">Prezzo: {{ $post_to_check->price }}€</h1>

                    <p class="h3 pb-5 text-wrap">{{ __('ui.createDesc') }}: {{ $post_to_check->description }}</p>

                    <h5 class="pb-5">{{ __('ui.author') }}: {{ $post_to_check->user->name }}</h5>
                    
                    <h6 class="fst-italic  pb-5">{{ __('ui.category') }}: {{ $post_to_check->category->name }}
                    </h6>
                </div>
                <div class="d-flex pb-4">
                    <form action="{{ route('reject', ['post' => $post_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btnreject er-font py-2 px-5 fw-bold">{{ __('ui.reject') }}</button>
                    </form>
                    <form action="{{ route('accept', ['post' => $post_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button
                        class="btn btnreject er-font py-2 px-5 ms-5 fw-bold">{{ __('ui.accept') }}</button>
                    </form>
                    
                </div>
                <div class="pb-5 mb-5">
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 text-center">
                <h1 class="fst-italic display-6 text-center pb-5">{{ __('ui.msgNoArticles') }}</h1>
                <a class="mt-5 btn btnreject" href="{{ route('homePage') }}">{{ __('ui.returnHomepage') }}</a>
            </div>
        </div>
        @endif
    </div>
    
</x-layout> 