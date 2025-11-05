<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function home(){
        return view("pages.home");
    }
    public function resume(){
        return view("pages.resume");
    }
    public function projects(){
        return view("pages.projects");
    }
    public function contact(){
        return view("pages.contact");
    }
}
