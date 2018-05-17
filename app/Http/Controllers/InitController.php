<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InitController extends Controller
{
    //
    function index(){
        //return 'Esta es la pagina de inicio';
        //return view('inicio');
        
        return view('login.index');
    }

    function index2(){
        return 'esta es index 2';
    }
}
