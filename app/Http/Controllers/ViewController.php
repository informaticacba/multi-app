<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function sesion(Request $request){
        if(!$token =  auth()->attempt($request->only('email', 'password'))){
            return response(null, 401);
        }
        return response()->json(compact('token'));
    }

    public function usu(Request $request){

      // $use = new \App\User();
      // $use->name = 'jjj';
      // $use->email = 'asdf';
      // $use->password = 'sadf';
      // $use->save();

      $article = \App\User::first();



 
    // $audit = $article->audits();

    }
}
