<x-layout>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="diplay-1 text-center text-white">{{__("ui.loginTitle")}}</h1>
                <x-error></x-error>
            </div>
        </div>
    </div>
    <div class="container pt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 border rounded-2 borderForm border-white border-2 p-4">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__("ui.loginEmail")}}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="exampleInputEmail1" value="{{ old('email') }}" wire:model.live="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__("ui.loginPass")}}</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" wire:model.live="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn btn-primary">{{__("ui.loginTitle")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>


{{-- <form action="{{route('login')}}"method="POST" >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}
