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
        <div class="row justify-content-center">
            <div class="col-12 alert alert-success text-center shadow rounded w-50 mx-auto">
                {{ session('message') }}
            </div>
        </div>
        @endif
    </div>
    @if ($post_to_check)
    <div class="container-fluid d-flex flex-column pt-5">
        <div class="row justify-content-center pb-5 pt-3">
            <div class="col-12 col-md-6 pe-5">
                @if ($post_to_check->images->count())
                <div class="row justify-content-evenly">
                    @foreach ($post_to_check->images as $key => $image)
                    <div class="col-6 ">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-12 mb-4 text-center ">
                                    <img src="{{ $image->getUrl(900, 900) }}"
                                    class="img-fluid rounded shadow  min-w-100"
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
                    @endforeach
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-5 mb-4 text-center">
                                <img class="img-fluid rounded shadow cardhome" src="https://picsum.photos/200"
                                alt="immagine segnaposto">
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between ps-5">
                <div>
                    <h1 class="pb-5">{{ $post_to_check->title }}</h1>
                    <h3 class="pb-5">{{__("ui.author")}}: {{ $post_to_check->user->name }}</h3>
                    <h4 class="pb-5">{{ $post_to_check->price }}€</h4>
                    <h4 class="fst-italic  pb-5">{{__("ui.category")}}: {{ $post_to_check->category->name }}</h4>
                    <p class="h4 pb-5 text-wrap">{{__("ui.createDesc")}}: {{ $post_to_check->description }}</p>
                </div>
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{ route('reject', ['post' => $post_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btnreject er-font py-2 px-5 fw-bold">{{__("ui.reject")}}</button>
                    </form>
                    <form action="{{ route('accept', ['post' => $post_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btnreject er-font py-2 px-5 fw-bold">{{__("ui.accept")}}</button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 text-center">
                <h1 class="fst-italic display-6 text-center pb-5">{{__("ui.msgNoArticles")}}</h1>
                <a class="mt-5 btn btnreject" href="{{ route('homePage') }}">{{__("ui.returnHomepage")}}</a>
            </div>
        </div>
        @endif
    </div>
    
</x-layout>
