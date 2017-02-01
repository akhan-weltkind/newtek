<?php

namespace App\Modules\Feedback\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feedback\Models\Feedback;
use App\Modules\Settings\Facades\Settings;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Mail;

class IndexController extends Controller
{

    use ValidatesRequests;

    public function index(){

        return view('feedback::index');
    }

    public function store(Request $request){

        $this->validate($request, $this->getRules($request), $this->getMessages());
        $arr = $request->all();

        $arr['ip'] = ip2long($request->ip());
        $arr['date'] = date('Y-m-d H:i:s');

        $this->getModel()->create($arr);

        Mail::send(
            'feedback::email',
            [ 'data' => $arr ],
            function ($message) {
            $emails = explode(',', Settings::get('feedback_email'));

            $message
                ->to($emails)
                ->from('no-reply@weltkind.com', widget('email.name'))
                ->subject(trans('feedback::index.emails.title'));
            }
        );

        return redirect()
            ->back()
            ->with(
                'message',
                'Ваше сообщение успешно отправлено. Наши менеджеры свяжуться с вами в ближайшее время.'
            );
    }

    public function getRules($request){
        return [
            'name'=>'required|max:255',
            'email'=>'required|email',
            'captcha' => 'required|captcha'

        ];
    }

    public function getMessages(){
        return [
            'required'=>'Это поле обязательно для заполнения',
            'email'=>'Укажите корректный электронный адрес'

        ];
    }

    public function getModel()
    {
        return new Feedback();
    }


}