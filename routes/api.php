<?php
 /*header('Access-Control-Allow-Origin', '*');
  header('Access-Control-Allow-Headers',' Origin, Content-Type, Accept, Authorization, X-Request-With');
 header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');*/

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
