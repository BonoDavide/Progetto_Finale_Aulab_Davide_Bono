<nav class="navbar navCustom navbar-expand-lg  transition">
    <div class="container-fluid">
        <a class="navbar-brand ps-2 pe-2" href="{{ route('homePage') }}">
            <img class="logo" src="{{ asset('/img/404.png') }}" alt="logo 404">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">Home</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('post.indexPost') }}">{{ __('ui.annunci') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.allCategories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach

                    </ul>
                </li>
                @auth
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item pt-1">
                            <a class="btn btn-success mx-3 btn-sm position-relative w-sm-25"
                                href="{{ route('revisor.index') }}">Dashboard Revisore
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Post::toBeRevisedCount() }}</span>
                            </a>

                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="btn btn-primary mx-3 "
                            href="{{ route('post.create') }}">{{ __('ui.inserisciAnnuncio') }}</a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                    </li>
                @endauth



            </ul>


            <form class="d-flex ms-auto" role="search" action="{{ route('post.search') }}" method="GET">
                <div class="input-group">
                    <input class="form-control me-2" name="query" type="search" placeholder="{{ __('ui.search') }}"
                        aria-label="Search">
                    <button class="btn btn-outline-success input-group-text"
                        type="submit">{{ __('ui.search') }}</button>
                </div>
            </form>
        </div>

        <div class="dropstart ms-3">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-duotone fa-solid fa-flag"></i>
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button"><x-_locale lang="it" />IT</button></li>
                <li><button class="dropdown-item" type="button"><x-_locale lang="en" />EN</button></li>
                <li><button class="dropdown-item" type="button"><x-_locale lang="es" />ES</button></li>
            </ul>
        </div>

    </div>
</nav>
