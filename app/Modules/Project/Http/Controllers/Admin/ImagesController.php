<?php

namespace App\Modules\Project\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Images;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Models\Image;


class ImagesController extends Images
{

    public function getParentModel()
    {
        return new Project();
    }

    public function getModel()
    {
        return new Image();
    }

}
