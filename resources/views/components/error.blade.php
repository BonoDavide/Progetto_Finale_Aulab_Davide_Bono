@if ($errors->any())
    <ul class="col-10 alert alert-danger ps-3 list-unstyled position-relative">
            @foreach ($errors->all() as $error)
                <li class="ps-3">{{ $error }}</li>
            @endforeach
        <button type="button" class="btn-close position-absolute mt-3 me-3 top-0 end-0" data-bs-dismiss="alert" aria-label="Close"></button>
    </ul>
@endif