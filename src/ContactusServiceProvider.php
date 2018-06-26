<?php

namespace Test\Contactus;
use Illuminate\Support\ServiceProvider;

class ContactusServiceProvider extends ServiceProvider {


    public function boot(){
        require_once __DIR__ . '/Http/routes.php';
        $this->loadViewsFrom(__DIR__.'/Views', 'contactus');
        $this->mergeConfigFrom(
            __DIR__.'/config/contactus.php', 'contactus'
        );

        $this->publishes([
            __DIR__.'/config/contactus.php' => config_path('contactus.php'),
        ]);
    }

    public function register(){

    }
}