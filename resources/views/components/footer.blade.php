<footer class="navCustom text-center">
    <!-- Grid container -->
    <div class="container">
        <div class="row justify-content-center text-white">
            <div class="col-6 pt-5 mb-3 text-center">
                <h5>{{ __('ui.become') }}</h5>
                <p>{{ __('ui.pBecome') }}</p>

                <a href="{{ route('become.revisor') }}" class="btn btn-success">{{ __('ui.revisor') }}</a>
            </div>
        </div>
    </div>

    <section class="container cont-footer">
        <!-- Section: Social media -->
        <div class="row justify-content-center p-0 m-0">
            <div class="p-0 d-flex justify-content-center">
                <!-- Facebook -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/fb.png') }}" alt="">
                </a>
            </div>
            <div class="p-0 d-flex justify-content-center">
                <!-- Twitter -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/x.png') }}" alt="">
                </a>
            </div>
            <div class="p-0 d-flex justify-content-center">
                <!-- Google -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/google.png') }}" alt="">
                </a>
            </div>
            <div class="p-0 d-flex justify-content-center">
                <!-- Instagram -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/ig.png') }}" alt="">
                </a>
            </div>
            <div class="p-0 d-flex justify-content-center h-div-footer">
                <!-- Linkedin -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/linkedin.png') }}" alt="">
                </a>
            </div>
            <div class="p-0 d-flex justify-content-center">
                <!-- Github -->
                <a class="icon-footer p-0 m-0" href="{{ route('homePage') }}">
                    <img class="d-block" src="{{ asset('img/github.png') }}" alt="">
                </a>
            </div>
        </div>
        <!-- Section: Social media -->
    </section>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2025 Copyright: 404 BrainNotFound SNC
        {{-- <a class="text-body" href="https://mdbootstrap.com/">404 BrainNotFound SNC</a> --}}
    </div>
    <!-- Copyright -->
</footer>
