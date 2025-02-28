<div>
    <div class="container">   
        <div class="row">
            <div class="col-12 col-md-8 pt-5">
            @if (session('status'))
                <div class="card bg-light alert text-success text-uppercase ">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
    </div>
    <form wire:submit='createPost'>
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input wire:model.blur='title' type="text" class="form-control">
            @error('title')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input wire:model.blur='price' type="numeric" class="form-control">
            @error('price')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-label mb-3">
            <select wire:model.blur='category' class="form-select" id="floatingSelect"
                aria-label="Floating label select example">
                <option selected>Seleziona Categoria</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mb-3">
            <textarea wire:model.blur='description' class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Descrizione</label>
            @error('description')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        {{-- Inserimento immagini --}}
        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple
                class="form-control shadow @error('temporary_images.') is-invalid @enderror" placeholder="Img"/>

            @error('temporary_images.')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror

            @error('temporary_images')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>

        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-success rounded shadow">
                        @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded"
                                    style="background-image: url({{ $image->temporaryUrl() }});">
                                </div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})">X</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


