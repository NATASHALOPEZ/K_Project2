<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/h1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
     if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ]

))

      $user = Auth::user();
      
      if($user['role_id']==1)
        {
       
        return redirect('/admin');
                    
       }
     else {
        return redirect('/admin');
     }
}



public function logout(Request $request) {
  Auth::logout();
  return redirect('/login');
}


 public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        //return  $userSocial->name;

        $findUser = User::where('email',$userSocial->email)->first();

        if ($findUser){
         Auth::login($findUser);
         return 'done with old';

        }else{
        $user = new User;
        $user->name = $userSocial->name;
        $user->email = $userSocial->email;
        $user->save();
        Auth::login($user);

        return 'done with new';

        }

       
    }

}

