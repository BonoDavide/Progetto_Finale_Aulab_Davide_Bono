<div>
    <button 
        wire:click='addToWishList' 
        class="btn btn-reject
            @if($isFavorited) bg-danger @else bg-white text-black @endif"
    >
        @if($isFavorited)
            Togli dai preferiti
        @else
            Aggiungi ai preferiti
        @endif
    </button>
</div>
