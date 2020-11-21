<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function printers() {

        return view ('printers');
    }

    public function toners() {

        return view ('toners');
    }

    public function support() {

        return view ('support');
    }

    public function about() {
        return view ('about');
    }

    public function contact() {
        return view ('contact');
    }
}
