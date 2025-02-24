<div>
    <form wire:submit='createPost'>
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input wire:model='title' type="text" class="form-control">
            @error('title')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input wire:model='price' type="numeric" class="form-control">
            @error('price')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea wire:model='description' class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Descrizione</label>
            @error('description')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <select wire:model='category' class="form-select" id="floatingSelect"
                aria-label="Floating label select example">
                <option selected>Seleziona Categoria</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


