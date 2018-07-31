<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/h1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
     
 
    return view('auth.register_admin');
  
  
       //$washstations = Laundries::all();
      //return view('stations.home1')->with('data',$washstations);
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator

     */

  /* public function get(){
      $data = Input::all();
    dd($data);
   }*/
    
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            /*'lname' => 'required|string|max:255',*/
            /*'role_id' => 'required|integer|role_id|max:1',*/
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
       
      
     /* if($data['role_id'])
        {
          'role_id' ==1;            
       }
     else {
        return "error";
     }*/
}
  

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    	
            
        return User::create([
            'name' => $data['name'],
            'role_id' => $data['role_id'],
           /* 'lname' => $data['lname'],*/
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
         $user
       ->roles()
       ->attach(Role::where('name', 'Admin')->first());
    return $user;
    }
}
