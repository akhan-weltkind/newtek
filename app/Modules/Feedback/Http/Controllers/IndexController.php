<?php

namespace App\Modules\Feedback\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feedback\Models\Feedback;
use App\Modules\Settings\Facades\Settings;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Mail;

class IndexController extends Controller
{

    use ValidatesRequests;

    public function index(){

        return view('feedback::index');
    }

    public function modal(Request $request){

        $v = Validator::make($request->all(), $this->getRules(), $this->getMessages());

        if ($v->fails())
        {
            return view('feedback::main')->withErrors($v->errors());
        }

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

        echo '<div class="alert alert-success">' .trans('feedback::index.success') . '</div>';
        die;

    }

    public function getModal(){
        echo view('feedback::main');
        die;
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
                trans('feedback::index.success')
            );
    }

    public function getRules(){
        return [
            'name'=>'required|max:255',
            'email'=>'required|email',
            'captcha' => 'required|captcha'

        ];
    }

    public function getMessages(){
        return [
            'required'=>trans('feedback::validation.required'),
            'email'=>trans('feedback::validation.email'),
        ];
    }

    public function getModel()
    {
        return new Feedback();
    }


}