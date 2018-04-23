<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function lista(){
        return 'lista';
    }

    function read($id,$name = null){
        if($name == null){
            return "El id: ". $id." pertenece  sin nombre";
        }else{
            return "El id: {$id} pertenece a {$name}";
        }
    }
}
