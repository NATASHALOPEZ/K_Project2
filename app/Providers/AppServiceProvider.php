<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Voyager\washController;

use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
     app()->setLocale($request->segment(1));
     Schema::defaultStringLength(191);
     
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(VoyagerBreadController::class, washController::class);
      
    }


}
