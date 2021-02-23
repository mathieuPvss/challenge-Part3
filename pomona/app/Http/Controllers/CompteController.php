<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CompteController extends Controller
{
    //inscription
    public function formulaire(){
        return view('inscription');
    }

    public function inscrit(Request $request){
        
        request()->validate([
            'email'=>['required','email'],
            'password'=>['required','confirmed'],
            'password_confirmation'=>['required'],
            'nom'=>['required']
        ]);

        $user =User::create([
            'email' =>request('email'),
            'password' =>bcrypt(request('password')),
            'nom' => request('nom'),
            'admin' => true,
        ]);
        return redirect('/connexion')->with('success', 'vous vous êtes inscrit');
    }

    //se connecter
    public function connect(){
        return view('connexion');
    }

    public function connecter(){
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8']
    ]);
    $result = auth()->attempt([
        'email'=> request('email'),
        'password' =>request('password')
    ]);
    if($result) {
       
        return redirect('/dashboard')->with('success', 'vous etes connecté');;
    }

    return back()->withErrors([
        'email'=>"the credential do not match"
    ]);
    }
    

}
