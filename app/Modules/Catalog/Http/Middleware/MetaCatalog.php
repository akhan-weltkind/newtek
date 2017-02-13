<?php

namespace App\Modules\Catalog\Http\Middleware;

use App\Modules\Category\Facades\Category;
use App\Modules\Widgets\Facades\Widget;
use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use App\Modules\Tree\Models\Tree;

class MetaCatalog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $meta = [];
        $categoryId = $request->route('category');

        $category = Category::getById($categoryId);

        $title = false;

        if ($category) {

            if (@$category->meta_title) {
                $title = $category->meta_title;
            }

            if (!$title && @$category->title) {
                $title = $category->title;
            }

        }
        else {
            $entity = Tree::whereSlug('catalog')->first();

            if (@$entity->meta_title) {
                $title = $entity->meta_title;
            }

            if (!$title && @$entity->title) {
                $title = $entity->title;
            }

        }

        if (!$title){
            $title = Widget::get('title');
        }

        if (!$title){
            $title = config('app.name');
        }

        if ($title) {

            $meta['title'] = $title;
        }


        $h1 = false;

        if ($category) {

            if (@$category->meta_h1) {
                $h1 = $category->meta_h1;
            }

            if (!$h1 && @$category->title) {
                $h1 = $category->title;
            }

        }
        else {
            $entity = Tree::whereSlug('catalog')->first();

            if (@$entity->meta_h1) {
                $h1 = $entity->meta_h1;
            }

            if (!$h1 && @$entity->title) {
                $h1 = $entity->title;
            }
        }

        if ($h1){
            $meta['h1'] = $h1;
        }

        $keywords = false;

        if ($category) {
            if (@$category->meta_keywords) {
                $keywords = $category->meta_keywords;
            }
        }
        else {
            $entity = Tree::whereSlug('catalog')->first();

            if (@$entity->meta_keywords) {
                $keywords = $entity->meta_keywords;
            }
        }

        if ($keywords){
            $meta['keywords'] = $keywords;
        }


        $description = false;

        if ($category) {
            if (@$category->meta_description) {
                $description = $category->meta_description;
            }

            if (!$description && @$category->preview){
                $description = $category->preview;
            }

            if (!$description && @$category->lid){
                $description = $category->lid;
            }

            if (!$description && @$category->content){
                $description = $this->cleanContent($category->content, 150);
            }
        }

        if ($description){
            $meta['description'] = $description;
        }

        View::share('meta', (object)$meta);



        return $next($request);

    }

    protected function cleanContent($content, $length){

        return trim(preg_replace('/&#?[a-z0-9]+;/i', '', str_limit(preg_replace('/\r|\n/', ' ', strip_tags($content)), $length)));

    }


}
