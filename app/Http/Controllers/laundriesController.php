<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
//use App\Article;


class laundriesController extends Controller
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
     
    
  
       $stores = Service::all();
       
        return view('welcome')
            ->with('stores', $stores);

      //return view('stations.home1')->with('data',$washstations);
    }
   /*   public function searchList(Request $request)
    {

       $term = $request->get('term','');
        
        $detail=Laundries::where('name','LIKE','%'.$term.'%')->get();
        
        $data=array();
        foreach ($detail as $l_data) {
                $data[]=array('value'=>$l_data->name,'latitude'=>$l_data->latitude,'longitude'=>$l_data->longitude);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }*/

    

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

}
