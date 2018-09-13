<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannController extends Controller
{
   public function index()
    {
  
     
    $img = Banner::all();
 
    return view('stations.home1')
            ->with('img', $img);

    }
}
