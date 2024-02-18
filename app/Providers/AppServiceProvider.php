<?php

namespace App\Providers;

use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
 
          Schema::defaultStringLength(191);

        Blade::directive("br", function () {
            return "<br>";
    });

            Blade::directive("addName", function ($arg) {
                return "sayın...".$arg;
        });



        /*
    Response::macro('HomeMessage', function ($arg){
            return Response::make('505 Info'.strtoupper($arg));

    });
     */


}

}