<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage(){
        return view('pages.homepage');
    }

    public function registration(){
        return view('pages.auth.registration');
    }

    public function login(){
        return view('pages.auth.login');
    }

    public function profil(){
        $messages = \App\Message::all()->sortByDesc('created_at');
        return view('pages.profil.home')->withMessages($messages);
    }

    public function testmail(){
        Mail::to("cav0n@hotmail.fr")->send(new \App\Mail\testing);
    }
}
