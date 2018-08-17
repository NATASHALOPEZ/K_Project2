<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;

class TranslateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
 public function handle($request, Closure $next)
{
    if( !Session::has('locale' )){
        $browserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); //read browser language

 
        if ( array_key_exists($browserLanguage, Config::get('language.languages')) ) {
            Session::put('locale', $browserLanguage);
        } else {
            Session::put('locale', 'fr');
        }
    }
 
    //Simply set language from session 
    App::setlocale(Session::get('locale'));
  dd($request);
    return $next($request);
  

}
}