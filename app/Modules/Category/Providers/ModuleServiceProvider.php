<?php

namespace App\Modules\Category\Providers;

use App\Providers\ModuleProvider;


class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'category';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind('category_repository', function(){
            return new \App\Modules\Category\Models\CategoryRepository;
        });

    }
}
