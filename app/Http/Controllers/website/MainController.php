<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home () {
        return view('website.pages.home.home');
    }
    public function project () {
        return view('website.pages.project.project');
    }
    public function gallery () {
        return view('website.pages.gallery.gallery');
    }
    public function construction () {
        return view('website.pages.construction.construction');
    }
    public function news () {
        return view('website.pages.news.news');
    }
    public function about () {
        return view('website.pages.about.about');
    }
    public function contact () {
        return view('website.pages.contact.contact');
    }
    public function career () {
        return view('website.pages.career.career');
    }
}
