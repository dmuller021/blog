<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function blogs() {
        return view('blogs');
    }

    public function login() {
        return view('login');
    }

    public function contact() {
        return view('contact');
    }
}
