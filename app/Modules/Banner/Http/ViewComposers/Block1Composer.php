<?php
namespace App\Modules\Banner\Http\ViewComposers;

use App\Modules\Banner\Models\Banner;
use Illuminate\View\View;

class Block1Composer
{
    public function compose(View $view){
        $banners = Banner::where('active',1)->orderBy('priority','desc')->orderBy('created_at','asc')->get();
        $view->with('banners', $banners);
    }
}