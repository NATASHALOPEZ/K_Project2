<?php
use App\Laundry;
use App\Article;
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
     
     return view('welcome');
});
Route::get('/trial', function () {
     
     return view('shortcode1');
});
Route::get('/article', function () {
     $article = Article::all();
     return view('article');
});
Route::get('/h1', function ($lang=null) {
     App::setlocale($lang);
     return view('stations.home1');
});
/*Route::get('/washstations', function () {
     
     return view('stations.index');
});*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
Route::get(trans('routes.services'), ['as' => 'services', 'uses' => 'PageController@getServicePage']);
Auth::routes();
Route::get('/h1',array('as'=>'complete','uses'=>'washstationsController@index'));
Route::get('/searchList',array('as'=>'searchList','uses'=>'washstationsController@searchList'));
Route::get('/searchCities',array('as'=>'searchCities','uses'=>'citiesController@searchCities'));
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/h1/{lang?}', 'LanguageLocalizationController@index');
//Route::get('/h1', 'washstationsController@index')->name('list_washstations');
//Route::get('/search', 'washstationsController@searchList')->name('list_washstations');
//Route::get('/washstations', 'washstationsController@getCoords')->name('list_coords');
Route::get('/h1', 'washstationsController@getCoords')->name('list_coords');


Route::get('/create', 'washstationsController@send')->name('send');
Route::get('/article', 'washstationsController@send')->name('send');