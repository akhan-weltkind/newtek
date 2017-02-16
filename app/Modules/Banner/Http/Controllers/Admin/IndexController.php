<?php

namespace App\Modules\Banner\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Priority;
use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;
use App\Modules\Banner\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;



class IndexController extends Admin
{

    use Image, Priority;

    public function getModel(){
        return new Banner();
    }

    public function getRules($request, $id = false)
    {
        return  [
            'title'     => 'sometimes|required|max:255',
        ];
    }
}
