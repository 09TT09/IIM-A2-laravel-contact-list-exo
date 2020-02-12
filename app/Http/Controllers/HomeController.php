<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* TODO Récupérer tout les utilisateurs, et renvoyer la view "home.blade.php avec les utilisateurs" */
		
		$utilisateurs = User::all();
		$contacts = Contact::all();
		
		return view('home', ['user' => $utilisateurs, 'contact' => $contacts]);
    }
}



