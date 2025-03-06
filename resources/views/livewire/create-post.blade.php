<div class="pt-3">
    <div class="container border rounded-2 borderForm p-4 border-dark border-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if (session('status'))
                    <div class="card bg-light alert text-success text-uppercase text-center">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <form wire:submit='createPost'>
            <div class="mb-1">
                <label class="form-label">{{__("ui.createTitle")}}:</label>
                <input wire:model.live='title' type="text" class="form-control">
                @error('title')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">{{__("ui.createPrice")}} €: </label>
                <input wire:model.live='price' type="numeric" class="form-control">
                @error('price')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-label mb-3">
                <select wire:model.live='category' class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected>{{__("ui.createCat")}}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea wire:model.live='description' class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">{{__("ui.createDesc")}}</label>
                @error('description')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- Inserimento immagini --}}
            <div class="mb-3">
                <input type="file" wire:model.live="temporary_images" multiple
                    class="form-control shadow @error('temporary_images.') is-invalid @enderror" placeholder="Img" />

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
                        {{-- <p>Preview:</p> --}}
                        <div class="row border border-2 border-dark rounded shadow">
                            @foreach ($images as $key => $image)
                                <div class="col d-flex flex-column align-items-center my-3">
                                    <div class="img-preview mx-auto shadow rounded border border-1 border-dark"
                                        style="background-image: url({{ $image->temporaryUrl() }});">
                                    </div>
                                    <button type="button" class="btn mt-1 btn-danger"
                                        wire:click="removeImage({{ $key }})">X</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="pt-3">
                <button type="submit" class="btn btn-primary">{{__("ui.createButton")}}</button>
            </div>
        </form>
    </div>
</div>
