<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageLocalizationController extends Controller
{
   public  function index(Request $request){
   	if($request->lang <> ''){
   		app()->setlocale($request->lang);
   	}
  echo trans('alert.success');
   }
  

}
