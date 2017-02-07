<?php

namespace App\Modules\Catalog\Providers;

use App\Providers\ModuleProvider;


class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'catalog';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->make('view')->composer(['catalog::admin.form'], 'App\Modules\Catalog\Http\ViewComposers\CatalogAdminComposer');
    }
}
