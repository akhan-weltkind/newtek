<?php
namespace App\Modules\Category\Facades;

use Illuminate\Support\Facades\Facade;

class Category extends Facade {
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'category_repository'; // the IoC binding.
    }
}
