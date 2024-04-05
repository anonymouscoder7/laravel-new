<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        $name = 'ram';
        $contact = 9862220799;
        return view('index',compact('name','contact'));
    }
    function about($id){
        dd($id);
        return view('frontend.about');
    }
    function contact(){
        return view('frontend.contact');
    }

    function student(){
        return view('create-student');

    }
}
