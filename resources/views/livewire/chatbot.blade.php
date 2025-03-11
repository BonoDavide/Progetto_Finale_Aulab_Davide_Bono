<div class="fixed bottom-4 right-4 w-72 bg-white shadow-lg rounded-lg overflow-hidden" x-data="{ open: false }">
    <button @click="open = !open" class="bg-blue-500 text-white p-2 rounded-full shadow-lg focus:outline-none">
        💬
    </button>
    <div x-show="open" class="p-4 border-t border-gray-200">
        <div class="h-48 overflow-y-auto border-b pb-2">
            @foreach ($messages as $message)
            <div class="{{ $message['from'] === 'user' ? 'text-right' : 'text-left' }} mb-2">
                <span class="px-3 py-2 inline-block rounded-lg {{ $message['from'] === 'user' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                    {{ $message['text'] }}
                </span>
            </div>
            @endforeach
        </div>
        <input type="text" class="w-full border mt-2 p-2" placeholder="Scrivi un messaggio..." wire:model="userInput" wire:keydown.enter="sendMessage">
    </div>
</div>