<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function faq() {
        return view('faq');
    }

    public function contact() {
        return view('contact');
    }

    public function account() {
        return view('account', [
            'user' => Auth::user()
        ]);
    }
}
