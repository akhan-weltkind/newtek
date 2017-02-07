<?php

namespace App\Modules\Catalog\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;
use App\Modules\Catalog\Models\Catalog;
use App\Facades\Route;
use App\Modules\Catalog\Models\Document;

class IndexController extends Admin
{

    use Image;

    public function getModel(){
        return new Catalog();
    }

    public function getRules($request, $id = false)
    {
        return  [
            'title' => 'sometimes|required|max:255',
        ];
    }

    protected function after($entity)
    {
        if (Route::getAction() == 'store' || Route::getAction() == 'update') {
            $this->upload($entity);
            /*$this->uploadFiles($entity);*/
        }

        if (Route::getAction() == 'edit') {
            view()->share('config', $this->getConfig());
        }

    }






}