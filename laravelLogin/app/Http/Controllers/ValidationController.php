<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\routes;

class ValidationController extends Controller
{
    public function showform(){
        return view('login');
    }

    public function validateform(Request $request){
        print_r($request->all());
        $this->validate($request,[
            'username'=>'required|max:8',
            'password'=>'required'
        ]);
    }
}
