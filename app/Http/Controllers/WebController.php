<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('modules.web.index');
    }
    public function about(){
        return view('modules.web.about');
    }
    public function contact(){
        return view('modules.web.contact');
    }
    public function blog(){
        return view('modules.web.blog_posts');
    }
}
