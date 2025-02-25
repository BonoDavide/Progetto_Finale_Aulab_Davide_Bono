<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user-revisor {email}'; //Creazione comando personalizzato

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rende un utente revisore'; //Messaggio creazione personalizzato

    /**
     * Execute the console command.
     */
    public function handle() //Funzione che partirà quando questo comando verrà chiamato
    {
       $user = User::where("email", $this->argument("email"))->first(); 
       if (!$user) {
        $this->error("Utente non trovato");
        return;
       }
       $user->is_revisor=true;
       $user->save();
       $this->info("L'utente {$user->name} è ora revisore");
    }
}
