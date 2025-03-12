<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
// use Google\Cloud\Vision\V1\Product;

class Chatbot extends Component
{
    public $messages = [];
    public $userInput;

    public function sendMessage()
    {
        if (!$this->userInput) return;

        $this->messages[] = ['text' => $this->userInput, 'from' => 'user'];

        $response = $this->getChatbotResponse($this->userInput);

        $this->messages[] = ['text' => $response, 'from' => 'bot'];
        $this->userInput = '';
    }

    private function getChatbotResponse($input)
    {
        // Controlliamo se l'input riguarda prodotti
        $posts = Post::where('name', 'LIKE', "%$input%")
                           ->orWhere('description', 'LIKE', "%$input%")
                           ->take(3)->get();

        if ($posts->count() > 0) {
            $postList = $posts->map(fn($p) => "$p->name - €$p->price")->join("\n");
            return "Ecco alcuni prodotti che potrebbero interessarti:\n$postList";
        }
        
        // Se nessun prodotto corrisponde, usiamo OpenAI per generare una risposta
        $apiKey = env('OPENAI_API_KEY');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [['role' => 'system', 'content' => 'Sei un assistente che aiuta gli utenti a trovare prodotti in un e-commerce.'],
                           ['role' => 'user', 'content' => $input]],
            'max_tokens' => 100,
        ]);

        return $response->json()['choices'][0]['message']['content'] ?? 'Non ho trovato una risposta adatta.';
    }




    public function render()
    {
        return view('livewire.chatbot');
    }
}
