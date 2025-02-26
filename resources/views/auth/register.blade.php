<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrati</h1>
                <x-error></x-error>
            </div>
        </div>
    </div> 

    
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
            
            <form method="POST" action="{{route('register')}}">
                @csrf
                
                
                
                <div class="mb-3">
                    
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" id="username">
                    
                </div>
                
                <div class="mb-3">
                    
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" >
                    
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" >
                </div>
                <div class="form-group mt-3">
                    <label for="password_confirmation">Conferma Password</label>
                    <input id="password_confirmation" type="password" class="form-control"
                    name="password_confirmation" >
                </div>
                
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</x-layout>






