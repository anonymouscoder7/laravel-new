<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        // data get
        $students = Student::all(); 
        return view('index',compact('students'));
    }
    function about($id){
        dd($id);
        return view('frontend.about');
    }
    function contact(){
        return view('frontend.contact');
    }

}
