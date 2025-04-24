<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function handleForm(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        return view('submitted', compact('name', 'email', 'message'));
    }
}
