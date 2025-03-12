<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="diplay-1 text-center text-white">{{__("ui.registerTitle")}}</h1>
                <x-error></x-error>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 border rounded-2 borderForm border-white border-2 p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">{{__("ui.registerUserName")}}</label>
                        <input type="text" name="name" class="form-control" id="username" wire:model.live="name">
                    </div>

                    <div class="mb-3">

                        <label for="email" class="form-label">{{__("ui.registerEmail")}}</label>
                        <input type="email" name="email" class="form-control" id="email" wire:model.live="email">

                    </div>
                    <div class="form-group mt-3">
                        <label for="password">{{__("ui.registerPass")}}</label>
                        <input id="password" type="password" class="form-control" name="password" wire:model.live="password">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password_confirmation">{{__("ui.registerConfPass")}}</label>
                        <input id="password_confirmation" type="password" class="form-control" wire:model.live="password_confirmation"
                            name="password_confirmation">
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary">{{__("ui.registerTitle")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
