<?php
namespace Bitfumes\Blog;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'blog');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/contact.php', 'contact'
        // );
        // $this->publishes([
        //     __DIR__.'/config/contact.php'=>config_path('contact.php'),
        // ]);
    }


    public function register()
    {
    }

}