<?php

namespace App\Modules\Catalog\Http\Controllers;

use App\Modules\Category\Facades\Category;
use App\Modules\Tree\Facades\Tree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Catalog\Models\Catalog;
use App\Modules\Tree\Helpers\Breadcrumbs;
use App\Modules\Category\Models\Category as Cat;
use URL;

class IndexController extends Controller
{
    public $perPage = 10;

    public function getModel()
    {
        return new Catalog();
    }

    public function index()
    {

        $pageTitle = Tree::get('catalog');
        $pageTitle = $pageTitle->title;

        return view($this->getIndexViewName(), [
            'items'=>$this->getModel()->paginate($this->perPage),
            'pageTitle' => $pageTitle,
            'routePrefix'=>$this->routePrefix]);
    }

    public function product(Request $request)
    {
        $id = $request->route('id');
        $category_id = $request->route('category');

        $categoryModel  = Cat::whereId($category_id)->first();
        $product = Catalog::whereId($id)->first();

        $pageTitle = Category::getName($product->category_id);

        if ($product->category_id){
            if(isset($categoryModel->title) && $categoryModel->title){
                Breadcrumbs::add($categoryModel->title,URL::route('catalog.list',$product->category_id));
            }
        }
        Breadcrumbs::add($product->title,'');



        return view($this->getShowViewName(), [
            'routePrefix'=>$this->routePrefix,
            'entity' => $product,
            'pageTitle'     => $pageTitle,
            'category'      => $category_id,
        ]);
    }

    public function category(Request $request){

        $category   = $request->route('category');

        $catalogModel   = $this->getModel();
        $catalogModel   = $catalogModel::whereCategoryId($category);

        $categoryModel  = Cat::whereId($category)->first();

        $pageTitle  = $categoryModel->title;
        Breadcrumbs::add($categoryModel->title,URL::route('catalog'));


        return view($this->getIndexViewName(), [
            'items'         => $catalogModel->paginate($this->perPage),
            'pageTitle'     => $pageTitle,
            'category'      => $category,
            'routePrefix'   => $this->routePrefix
        ]);
    }

}