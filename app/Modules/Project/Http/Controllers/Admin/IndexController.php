<?php

namespace App\Modules\Project\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;
use App\Modules\Admin\Http\Controllers\Priority;
use App\Modules\Project\Models\Project;
use App\Facades\Route;

class IndexController extends Admin
{

    use Image, Priority;

    public function getModel(){
        return new Project();
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
        }

        if (Route::getAction() == 'edit') {
            view()->share('config', $this->getConfig());
        }

    }





}
