<?php
namespace App\Modules\Category\Models;

use App\Modules\Catalog\Models\Catalog;
use App\Modules\Category\Models\Category;

class CategoryRepository
{

 /*   public function getRoutes()
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
    }*/

    public function getSelect($all = false)
    {
        $keyed = collect();

        if ($all) {
            $keyed[0] = $all;
        }

        $categories = Category::all();
        foreach ($categories as $category){
            $keyed[$category->id] = $category->title;
        }


        return $keyed;
    }

    public function getMenus(){
        return Category::all();
    }

    public function all(){
        return Category::all();
    }
    public function getName($id){
        $category = Category::where('id',$id)->first();
        return $category->title;
    }

    public function getById($id){


        return Category::whereId($id)->first();
    }

}