<?php

namespace App\Modules\Project\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'project';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }


}
