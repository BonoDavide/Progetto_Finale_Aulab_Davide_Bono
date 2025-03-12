<div>
    <button 
        wire:click='addToWishList' 
        class="btn 
            @if($isFavorited) bg-danger @else bg-white @endif"
    >
        @if($isFavorited)
            Togli dai preferiti
        @else
            Aggiungi ai preferiti
        @endif
    </button>
</div>
