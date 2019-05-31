<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
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
        $this->topLeftMenu();
    }

    //Top Left menu for users
    public function topLeftMenu(){
        View::composer('layouts.leftMenu', function($view){
            $view->with('categories', \App\Models\Category::where('parent_id', NULL)->where('published',1)->get());
        });
    }
}
