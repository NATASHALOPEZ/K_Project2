<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

/*class BannController extends Controller
{
   public function index()
    {
   $lat = $_POST['latitude'];
   $lng = $_POST['longitude'];
   $radius = 100;

    $data = DB::select(DB::raw('SELECT Title,Image,Description,Latitude,Longitude,( 3959 * acos( cos( radians(' . $lat . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $lng . ') ) + sin( radians(' . $lat . ') ) * sin( radians(latitude) ) ) ) AS distance FROM Banner HAVING distance <' . $radius . ' ORDER BY distance') );
     
   // $img = Banner::all();
 
    return view('stations.home1')
            ->with('data', $data);

    }*/
}
