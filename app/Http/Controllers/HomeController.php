<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke(){
        //return "HOME";
        //return view("home");
        return view('admin.index');
    }
}
