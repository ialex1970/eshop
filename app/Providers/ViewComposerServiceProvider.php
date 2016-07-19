<?php

namespace App\Providers;

use App\Brand;
use App\Product;
use Illuminate\Support\ServiceProvider;
use App\Category;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
        $this->composeSidebar();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function composeSidebar()
    {
        view()->composer('includes.sidebar', function ($view) {
            $view->with('categories', Category::all());
        });
 /*       view()->composer('includes.sidebar', function ($view) {
            $view->with('brands', Brand::all());
        });*/
        view()->composer('includes.sidebar', function ($view) {
            $view->with('products', Product::all());
        });
    }

    public function composeNavigation()
    {
        view()->composer('includes.nav', function ($view) {
            $view->with('categories', Category::all());
        });
    }
}
