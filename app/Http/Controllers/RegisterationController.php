<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){
       $errors = $request->validate([
                'name' => 'required',
                'mail' => 'required | email',
                'password' => 'required ',
                'cnf_password' => 'required '
            ]);
        echo "<pre>";
        print_r($request->all());
    }
}
