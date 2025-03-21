<header class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <h1 class="title glitch-text ">BYTEFLUX</h1>
            <h2 class="title2">-{{ __('ui.subTitle') }}-</h2>
            <div class="bottoni-header">
              @auth
              <div class="d-flex justify-content-center flex-column">
                <p>{{__('ui.headerMessage1')}}</p>
                <a class="btn btnglitch" href="{{ route('post.create') }}">{{ __('ui.inserisciAnnuncio') }}</a>
              </div>
              @else
              <div class="container">
                <div class="row">
                  <p>{{__('ui.headerMessage2')}}</p>
                </div>
                <div class="row">
                  <a class="btn btnglitch1  mx-4" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                  <a class="btn btnglitch1  mx-4" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                </div>
              </div>
              @endauth
            </div>
            <div data-bs-interval="2000">
                <img class="imgcustom" src="{{ asset('img/carosel1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</header>
