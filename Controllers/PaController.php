<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaController extends Controller
{
    public function usuario(){
        return view('users');
    }

    public function datos(Request $request){
        echo "Usuario: ";
        return  $request->input("id_user")."<br>";
        echo "Password: ";
        return  $request->input("pasw1");
    }
}
