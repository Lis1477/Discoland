<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ProductMenuProvider extends ServiceProvider
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
        View::composer('includes.product_menu', 'App\Http\ViewComposers\ProductMenuComposer');
    }
}