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

    public function getMenus(){
        return Model::whereDepth(1)->get();
    }

    public function get($id)
    {
        return Model::whereId($id);
    }

    public function getRoot()
    {
        return Model::where('parent_id', null)->first();
    }

    public function getSelect()
    {

        $keyed = collect();

        Model::admin()->get()->mapWithKeys(function ($item) use ($keyed) {
            if($item->depth != 0){
                $keyed[$item->id] = str_repeat('-', $item->depth) . $item->title;
            }
        });

        return $keyed;
    }

    public function getFirstLevel(){

        $result = Model::where('depth',1)->active()->get();

        return $result;
    }

    public function getName($id){
        $result = Model::pluck('name')->where('id',$id)->first();

        return $result;
    }

}