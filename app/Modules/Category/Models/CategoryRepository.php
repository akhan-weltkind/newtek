<?php
namespace App\Modules\Category\Models;

use App\Modules\Category\Models\Category as Model;

class CategoryRepository
{

    public function getRoutes()
    {
        $routes = Model::active()->get();

        $url = [];
        foreach ($routes as $num => $route) {

            if ($num > 0) {
                if ($route->depth > $routes[$num - 1]->depth) {
                    $url[] = $routes[$num - 1]->slug;
                }

                if ($route->depth < $routes[$num - 1]->depth) {

                    $diff = $route->depth - $routes[$num - 1]->depth;
                    $url = array_slice($url, 0, $diff);
                }
            }

            $routes[$num]->url = ltrim(implode('/', $url) . '/' . $route->slug, '/');
        }

        return $routes;
    }

    public function get($slug)
    {
        return Model::where('slug', $slug)->first();
    }

    public function getRoot()
    {
        return Model::where('parent_id', null)->first();
    }

    public function getSelect()
    {

        $keyed = collect();

        Model::admin()->get()->mapWithKeys(function ($item) use ($keyed) {
            $keyed[$item->id] = str_repeat('-', $item->depth) . $item->title;
        });

        return $keyed;

    }

}