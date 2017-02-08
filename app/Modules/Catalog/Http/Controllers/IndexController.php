<?php

namespace App\Modules\Catalog\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Catalog\Models\Catalog;
use App\Modules\Tree\Helpers\Breadcrumbs;
use App\Modules\Category\Models\Category as Cat;
use URL;

class IndexController extends Controller
{
    public function getModel()
    {
        return new Catalog();
    }

    public function index()
    {
        $pageTitle = trans('catalog::front.title');

        Breadcrumbs::add('Главная',home());
        Breadcrumbs::add(trans('catalog::front.title'),URL::route('catalog'));

        return view($this->getIndexViewName(), [
            'items'=>$this->getModel()->paginate($this->perPage),
            'pageTitle' => $pageTitle,
            'routePrefix'=>$this->routePrefix]);
    }

    public function product(Request $request)
    {
        $id = $request->route('id');
        $category_id = $request->route('category');

        $product = Catalog::whereId($id)->first();

        Breadcrumbs::reset();
        Breadcrumbs::add('Главная',home());
        Breadcrumbs::add(trans('catalog::front.title'),URL::route('catalog'));

        if (Cat::whereId($product->category_id)->first()->depth == 1) {
            Breadcrumbs::add(Cat::whereId($product->category_id)->pluck('title')->first(),URL::route('catalog.list',$product->category_id));
        }

        Breadcrumbs::add($product->title,'');

        return view($this->getShowViewName(), [
            'routePrefix'=>$this->routePrefix,
            'entity' => $product,
            'category'      => $category_id,
        ]);
    }

    public function category(Request $request){
        $pageTitle  = trans('catalog::front.title');
        $category   = $request->route('category');

        $catalogModel   = $this->getModel();
        $catalogModel   = $catalogModel::whereCategoryId($category);

        $categoryModel  = Cat::whereId($category)->first();

        Breadcrumbs::add('Главная',home());
        Breadcrumbs::add(trans('catalog::front.title'),URL::route('catalog'));


        if ($categoryModel->depth && $categoryModel->depth > 0) {
            if ($categoryModel->depth && $categoryModel->depth > 1) {
                $category = $categoryModel->parent_id;
                Breadcrumbs::add($categoryModel->where('id',$categoryModel->parent_id)->pluck('title')->first(),URL::route('catalog'));
                Breadcrumbs::add($categoryModel->title,URL::route('catalog'));

            } else {
                Breadcrumbs::add($categoryModel->title,URL::route('catalog'));
            }

        }

        return view($this->getIndexViewName(), [
            'items'         => $catalogModel->paginate($this->perPage),
            'pageTitle'     => $pageTitle,
            'category'      => $category,
            'routePrefix'   => $this->routePrefix
        ]);
    }

}