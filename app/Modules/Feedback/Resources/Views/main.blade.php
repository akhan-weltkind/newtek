    {!! Form::open(['id' => 'f_contact','action' => '\App\Modules\Feedback\Http\Controllers\IndexController@modal'])  !!}
        <h6>@lang('feedback::index.form_title')</h6>
        @include('feedback::main-errors')
        <div class="b-form">
            {{ csrf_field() }}

            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_text b-form-item_style_default
                    {{ $errors->has('name')?'b-form-item_status_error ':null }}">
                    <label for="name" class="b-form-item__label">@lang('feedback::index.name')
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="text" name="name" placeholder="@lang('feedback::index.name_placeholder')" id="name2"
                               value="{{old('name')}}">
                    </div>
                    @if ($errors->has('name'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('name') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_email b-form-item_style_default
                    {{ $errors->has('email')?'b-form-item_status_error ':null }}">
                    <label for="email" class="b-form-item__label">@lang('feedback::index.email')
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="email" name="email" placeholder="@lang('feedback::index.email_placeholder')" id="email"
                               pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="{{old('email')}}">
                    </div>
                    @if ($errors->has('email'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('email') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_textarea b-form-item_style_default
                    {{ $errors->has('message')?'b-form-item_status_error ':null }}">
                    <label for="textarea" class="b-form-item__label">@lang('feedback::index.message')
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <textarea name="message" cols="80" rows="24"
                                  placeholder="@lang('feedback::index.message_placeholder')" id="textarea">{{old('message')}}</textarea>
                    </div>
                    @if ($errors->has('message'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('message') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_captcha b-form-item_style_default
                    {{ $errors->has('captcha')?'b-form-item_status_error ':null }}">
                    <label for="captcha" class="b-form-item__label">@lang('feedback::index.captcha')<span> *</span></label>
                    <div class="b-form-item__input-image">{!! captcha_img('flat') !!}</div>
                    <div class="b-form-item__input">
                        <input type="text" name="captcha" id="captcha" @lang('feedback::index.captcha_placeholder')>
                    </div>
                    @if ($errors->has('captcha'))
                        <br />
                        <br />
                        <br />
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('captcha') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__button">
                <input type="submit" value="@lang('feedback::index.send')" class="b-button b-button_block b-button_color_green b-button_size_lg b-button_bold" id="f_send">
            </div>
        </div>
    {!! Form::close() !!}