<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('home');
    }

    public function about(){

        return view('front.about');
    }

    public function contact(){

        return view('front.contact');
    }

    public function directoire(){

        return view('front.directoire');
    }

    public function activities(){

        return view('front.activities');
    }

    public function blog(){

        return view('front.blog.index');
    }

    public function blogShow(){

        return view('front.blog.show');
    }
}
