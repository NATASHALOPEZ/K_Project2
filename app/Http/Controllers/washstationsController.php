<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpociot\VatCalculator\VatCalculator;

use App\Laundry;
use App\BusinessLaundry;
use App\Service;
use App\Article;


use DB;

class washstationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    $data = Laundry::all();

    return view('stations.home1')

            ->with('data', $data);

  
       //$washstations = Laundries::all();
      //return view('stations.home1')->with('data',$washstations);
    }

        public function validateVATID($vat_id)
    {
        try {
            $isValid = $this->calculator->isValidVATNumber($vat_id);
            $message = '';
        } catch (VATCheckUnavailableException $e) {
            $isValid = false;
            $message = $e->getMessage();
        }
        return [
            'vat_id'   => $vat_id,
            'is_valid' => $isValid,
            'message'  => $message,
        ];
    }
      public function searchList(Request $request)
    {

       $term = $request->get('term','');
        
        $detail=Laundry::where('name','LIKE','%'.$term.'%')->orWhere('City','LIKE','%'.$term.'%')->get();
        
      
        $data=array();
        foreach ($detail as $l_data) {
                $data[]=array('id'=>$l_data->id,'value'=>$l_data->name,'city'=>$l_data->City,'latitude'=>$l_data->latitude,'longitude'=>$l_data->longitude);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found'];
    }

    

    public function getCoords(Request $request)
    {
   $lat = $_POST['latitude'];
   $lng = $_POST['longitude'];
   $radius = $_POST['radius'];

    $data = DB::select(DB::raw('SELECT id,name,address,latitude,longitude,( 3959 * acos( cos( radians(' . $lat . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $lng . ') ) + sin( radians(' . $lat . ') ) * sin( radians(latitude) ) ) ) AS distance FROM Laundry HAVING distance <' . $radius . ' ORDER BY distance') );
 /*   $userLangs = preg_split('/,|;/', $request->server('HTTP_ACCEPT_LANGUAGE'));
dd($userLangs);*/
  
  
        return view('stations.home1')
            ->with('data', $data);
    }

public function passCoords(Request $request, $id)
    {
 /*  $lat = $_POST['lat'];
   $lon = $_POST['lon'];*/
    //$ups = User::find(Auth::user()->id)->products()->get();
     $data = Laundry::all(); 
    $laundryData = Laundry::find($id); 
    $services   = Laundry::find($id)->category()->get();
    $openingHours = Laundry::find($id)->business()->get();
    return view('stations.wall',compact( 'data','laundryData','services','openingHours'));      
    }




      public function show($slug)
    {
        // This is the only difference you need be aware of
        $post = Service::whereTranslation('slug', $slug)->firstOrFail();
        if ($post->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('post.show', $post->translate()->slug);
        }

        return view('post')
            ->with('post', $post);
    }


  /*  
   public function passData(Request $request)
   {
    $BusinessHours = BusinessLaundry::all();

      return view('stations.wall')->with('BusinessHours',$BusinessHours);
   }*/
  
}
