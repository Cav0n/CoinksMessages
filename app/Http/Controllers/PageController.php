<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.profil.home');
    }
}
