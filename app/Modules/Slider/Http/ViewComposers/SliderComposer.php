<?php
namespace App\Modules\Slider\Http\ViewComposers;

use Illuminate\View\View;
use App\Modules\Slider\Models\Slider;

class SliderComposer
{

    public function compose(View $view){
        $slider = new Slider();;
        $result = $slider::whereActive(1)->get();

        $view->with('slider', $result);
    }
}