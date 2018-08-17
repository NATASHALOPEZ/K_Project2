<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;


class VoyagerController extends BaseVoyagerController
{
	/*public function index()
	{
	if(Auth::user()->role_id == 2){
   $laundries = user::find(auth()->id())->Laundry;
   return redirect('/admin')->with(compact('laundries'));
}else{
    
     return Voyager::view('voyager::index');
}	
	}*/

}
