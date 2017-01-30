<?php

namespace App\Modules\Slider\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Slider\Models\Slider;

class IndexController extends Controller
{

    public function getModel()
    {
        return new Slider();
    }

    /*public function index(){
        return view($this->getIndexViewName(), ['entities'=>$this->getModel()->published()->paginate($this->perPage), 'routePrefix'=>$this->routePrefix]);
    }*/

}