<?php

namespace App\Modules\Banner\Providers;

use App\Providers\ModuleProvider;


class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'banner';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->make('view')->composer('banner::block1', 'App\Modules\Banner\Http\ViewComposers\Block1Composer');
        $this->app->make('view')->composer('banner::admin.form', 'App\Modules\Banner\Http\ViewComposers\BannerAdminComposer');
    }
}
