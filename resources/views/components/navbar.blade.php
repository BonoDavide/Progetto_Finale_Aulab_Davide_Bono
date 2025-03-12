<nav class="navbar navCustom navbar-expand-md transition">
    <div class="container-fluid">
        <a class="navbar-brand ps-2 pe-2" href="{{ route('homePage') }}">
            <img class="logo" src="{{ asset('/img/mimmo.png') }}" alt="logo 404">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">Home</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.indexPost') }}">{{ __('ui.annunci') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.allCategories') }}
                    </a>
                    <ul class="dropdown-menu bg-custom-s">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item bg-custom-s ul-over-custom"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>



            <form class="d-flex ms-auto" role="search" action="{{ route('post.search') }}" method="GET">
                <div class="input-group">
                    <input class="form-control me-2" name="query" type="search" placeholder="{{ __('ui.search') }}"
                        aria-label="Search">
                    <button class="btn input-group-text ul-over-custom" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>

            <div class="dropdown ms-3">
                <button class="btn dropdown-toggle ul-over-custom" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset('vendor/blade-flags/language-' . app()->getLocale() . '.svg') }}" width="22" height="22" />
                    {{-- <i class="fa-duotone fa-solid fa-flag"></i> --}}
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-custom-s text-white wnav">
                    <li class=" bg-custom-s ul-over-custom "><button class="dropdown-item p-0 " type="button"><x-_locale lang="it" />IT</button></li>
                    <li class=" bg-custom-s ul-over-custom"><button class="dropdown-item p-0" type="button"><x-_locale lang="en" />EN</button></li>
                    <li class=" bg-custom-s ul-over-custom"><button class="dropdown-item p-0" type="button"><x-_locale lang="es" />ES</button></li>
                </ul>
            </div>

            {{-- <ul class="navbar-nav mb-2 mb-lg-0 ms-4">
                @auth
                    <li class="nav-item ps-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger ">{{ __('') }}
                                <i class="fa-duotone fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                    </li>
                @endauth
            </ul> --}}
        </div>
        <div class="dropdown ms-3">
            <button class="btn dropdown-toggle ul-over-custom" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-duotone fa-solid fa-user"></i>
            </button>
            @auth
                <ul class="dropdown-menu dropdown-menu-end bg-custom-s text-white ul-over-custom">
                    {{-- <ul class="navbar-nav mb-2 mb-lg-0 mx-auto"> --}}
                        @if (Auth::user()->is_revisor)
                            <li class="pt-1">
                                <a class="dropdown-item position-relative w-sm-25 bg-custom-s ul-over-custom"
                                    href="{{ route('revisor.index') }}">{{__("ui.revisorDashboard")}}
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Post::toBeRevisedCount() }}</span>
                                </a>
                            </li>
                        @endif
                        <li>
                            <a class="dropdown-item bg-custom-s ul-over-custom" href="{{ route('post.create') }}">{{ __('ui.inserisciAnnuncio') }}</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-custom-s dropdown-item text-danger">{{ __('ui.logout') }}</button>
                            </form>
                        </li>
                    {{-- </ul> --}}
                </ul>
            @else
                <ul class="dropdown-menu dropdown-menu-end bg-custom-s ul-over-custom text-white">
                    <li>
                        <a class="dropdown-item bg-custom-s ul-over-custom" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item bg-custom-s ul-over-custom" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
