<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\BecomeRevisor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index() {

        $post_to_check = Post::where("is_accepted", null)->first();
        return view("revisor.index", compact("post_to_check"));
    }

    public function accept(Post $post){
        $post->setAccepted(true);
        return redirect()
        ->back()
        ->with('message',"Hai accettato l'articolo $post->title");
    }

    public function reject(Post $post){
        $post->setAccepted(false);
        return redirect()
        ->back()
        ->with('message',"Hai rifiutato l'articolo $post->title");
    }

    public function becomeRevisor(){

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homePage')->with('messag', 'Complimenti, hai richiesto di diventare revisor');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email'=> $user->email]);
        return redirect()->back();
    }
}
