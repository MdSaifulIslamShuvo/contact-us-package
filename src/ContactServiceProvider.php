<?php


namespace Shuvo\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views","contact");
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->mergeConfigFrom(__DIR__."/config/contact.php","contact");

        //Publish
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path("migrations"),
            __DIR__.'/views' => resource_path("views/vendor/contact"),
            __DIR__.'/config/contact.php' => config_path("contact.php")
        ]);
    }

    public function register()
    {

    }
}
