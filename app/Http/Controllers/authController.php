<?php

namespace App\Http\Controllers;

use App\auth;
use Illuminate\Http\Request;

class authController extends Controller
{
  public function registerForm(){
    	return view('stations.register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
        auth::create($request->all());
        return redirect('/h1')->with('Status','You are registered');
    }
     public function validation($request)
    {
        return $this->Validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }
}
