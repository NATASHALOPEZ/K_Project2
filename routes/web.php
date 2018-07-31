<?php
use App\Laundry;
use App\Article;
use App\Banner;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     
     return redirect('/welcome');
});
View::composer('layouts.template', function($view){
   $img = Banner::all();
   $view->with('img', $img);
});   
Route::get('/welcome', function () {
     return view('stations.home1');
});
Route::get('/wall', function () {
     return view('stations.wall');
});

Route::get('/register_admin', function () {
     return view('auth.register_admin');
});

Route::get('/loginNew', function () {
     //App::setlocale($lang);
     return view('stations.login');
});
Route::get('/registerNew', function () {
     //App::setlocale($lang);
     return view('stations.register');
});

Route::get('/some', function () {
     //App::setlocale($lang);
     return view('stations.some');
});


Route::get(trans('routes.services'), ['as' => 'services', 'uses' => 'PageController@getServicePage']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/userLocation', 'washstationsController@getCoords');
Route::get('/userLocation',array('as'=>'userLocation','uses'=>'washstationsController@getCoords'));
Auth::routes();
Route::get('/welcome',array('as'=>'complete','uses'=>'washstationsController@index'));

Route::get('/searchList',array('as'=>'searchList','uses'=>'washstationsController@searchList'));
Route::post('/wall','washstationsController@passCoords');
Route::get('/wall',array('as'=>'wall','uses'=>'washstationsController@passCoords'));


Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'washstationsController@show']);


Route::get('/register_admin', 'adminController@index')->name('register_admin');
Route::post('/register_admin', 'adminController@register')->name('register_admin');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
