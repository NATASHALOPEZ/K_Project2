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
/*Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});*/

    Route::get('/', function () {
     
     return redirect('/welcome');
});

//Visualization of Banners
View::composer('layouts.template', function($view){
    $user_ip = getenv('REMOTE_ADDR');
    $geo= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=user_ip"));
     $lat= $geo["geoplugin_latitude"];
     $lng= $geo["geoplugin_longitude"];
   $radius = 80;

    $img = DB::select(DB::raw('SELECT Title,Image,Description,Latitude,Longitude,( 3959 * acos( cos( radians(' . $lat . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $lng . ') ) + sin( radians(' . $lat . ') ) * sin( radians(latitude) ) ) ) AS distance FROM Banners HAVING distance <' . $radius . ' ORDER BY distance') );
   //$img = Banner::all();
   $view->with('img', $img);
});   
Route::get('test', function()
{
    dd(Config::get('mail'));
});
//Routes
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
Route::get('/email', function () {
     //App::setlocale($lang);
     return view('email.sendEmail');
});


Route::get('/some', function () {
     //App::setlocale($lang);
     return view('stations.some');
});

Route::post('/vat', 'VatHelperController@receive')->name('vat');

Route::get('/vat', function()
{
    return View::make('auth.register');
});


Route::get(trans('routes.services'), ['as' => 'services', 'uses' => 'PageController@getServicePage']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/userLocation', 'washstationsController@getCoords');
Route::get('/userLocation',array('as'=>'userLocation','uses'=>'washstationsController@getCoords'));
Auth::routes();
Route::get('/welcome',array('as'=>'complete','uses'=>'washstationsController@index'));

Route::get('/searchList',array('as'=>'searchList','uses'=>'washstationsController@searchList'));
Route::post('/wall/{id}','washstationsController@passCoords');
Route::get('/wall/{id}',array('as'=>'wall','uses'=>'washstationsController@passCoords'));

/*Route::post('/wall','washstationsController@passData');
Route::get('/wall',array('as'=>'wall','uses'=>'washstationsController@passData'));*/


Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'washstationsController@show']);


Route::get('/register_admin', 'Auth\AdminController@index')->name('register_admin');
Route::post('/register_admin', 'Auth\AdminController@register')->name('register_admin');
Route::get('/home/{vat_id}', 'washstationsController@validateVATID');

Route::get('verifyEmail','Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
