<header class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <h1 class="title glitch-text ">BYTEFLUX</h1>
            <h2 class="title2 glitch-text ">-{{ __('ui.subTitle') }}-</h2>
            <div class="bottoni-header">
              @auth
              <div>
                <p>{{__('ui.headerMessage1')}}</p>
                <a class="btn bottone-over-custom" href="{{ route('post.create') }}">{{ __('ui.inserisciAnnuncio') }}</a>
              </div>
              @else
              <div>
                <p>{{__('ui.headerMessage2')}}</p>
                <a class="btn bottone-over-custom mx-4" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                <a class="btn bottone-over-custom mx-4" href="{{ route('register') }}">{{ __('ui.register') }}</a>
              </div>
              @endauth
            </div>
            <div data-bs-interval="2000">
                <img class="imgcustom" src="{{ asset('img/carosel1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</header>
