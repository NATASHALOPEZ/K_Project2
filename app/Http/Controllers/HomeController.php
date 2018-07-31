<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Laundry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundries = user::find(auth()->id())->Laundry;
        return view('home',compact('laundries'));
    }
}
