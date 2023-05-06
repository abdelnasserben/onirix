<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('account');
    }
}
