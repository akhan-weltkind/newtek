<?php

namespace App\Modules\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Project\Models\Project;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class IndexController extends Controller{

    public $perPage = 6;

    public function getModel(){
        return new Project();
    }


}