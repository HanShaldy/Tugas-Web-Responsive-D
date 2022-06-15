<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('home', [
            "judul" => "HOME"
        ]);
    }

    public function profile()
    {
        return view('profile', [
            "judul" => "MY PROFILE",
        ]);
    }

    public function blog()
    {
        return view('blog', [
            "judul" => "BLOG"
        ]);
    }

    public function fwtools()
    {
        return view('welcome');
    }
}
