<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verificationEmail;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
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
    use ValidatesRequests;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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


 

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'company'  => 'required|string|max:255',
            'VAT'   => 'required|string|unique:users|max:255',
            'Address' => 'required|string|unique:users|max:255',
            'country'  => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        Session::flash('status','You are Registered! please verify your email to activate your account');
        $user = User::create([
            'role_id' => $data['role_id'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'company' => $data['company'],
            'VAT' => $data['VAT'],
            'Address' => $data['Address'],
            'country' => $data['country'],
            'verifyToken' => Str::random(40),
        ]);

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return $user;
    }

    public function sendEmail($thisUser)
    {
      Mail::to($thisUser['email'])->send(new verificationEmail($thisUser)); 
    }
    
   
    public function verifyEmail()
    {
        return view('email.verifyEmail');
    }

     public function sendEmailDone($email,$verifyToken)
    {
     $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
     if($user){
        user::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
        return redirect(route('login'));
     }  else{
         echo 'user not found';    
     }

    }


}
