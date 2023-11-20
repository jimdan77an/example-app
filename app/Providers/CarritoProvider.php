<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CarritoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*", function($view){
            $session_name = 'idCarritos';
            $idCarritos = Session::get($session_name);
            $Carritos = Carritos::findOrCreatedBySessionId($idCarritos);
            Session::put($session_name, $Carritos-> idCarritos);
            $view-> with('Carritos', $Carritos);
        });
    }
}
