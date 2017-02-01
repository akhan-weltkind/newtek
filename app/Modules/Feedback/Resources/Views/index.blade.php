@extends('layouts.inner')

@push('js')
@verbatim
<script type="text/javascript">
    function initMap() {
        var myLatLng = {lat: <?=Settings::get('lat')?:0?>, lng: <?=Settings::get('lng')?:0?>};

        var map = new google.maps.Map(document.getElementById('map'), {
            scrollwheel: false,
            zoom: <?=Settings::get('zoom')?:8?>,
            center: myLatLng
        });


        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }

</script>
@endverbatim
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?=config('googlemaps.key')?>&callback=initMap"></script>
@endpush
@section('content')
<div class="contacts">
    <div class="contacts__left">
        <div class="contacts__info">
            {!! $page->content !!}
        </div>
        <div class="contacts__map">
            <div class="map">
                <div class="map__title">
                    <h6>@lang('feedback::index.location')</h6>
                </div>
                <div class="map__map" id="map"></div>
            </div>
        </div>
    </div>
    <div class="contacts-right">
        <h6>@lang('feedback::index.form_title')</h6>
        <div class="b-form">
            {!! Form::open(['action' => '\App\Modules\Feedback\Http\Controllers\IndexController@store'])  !!}

            @include('common.errors')
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_text b-form-item_style_default">
                    <label for="name" class="b-form-item__label">@lang('feedback::index.name')
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="text" name="name" placeholder="@lang('feedback::index.name_placeholder')" id="name"
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
                <div class="b-form-item b-form-item_type_email b-form-item_style_default">
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
                <div class="b-form-item b-form-item_type_textarea b-form-item_style_default">
                    <label for="message" class="b-form-item__label">@lang('feedback::index.message')
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
                <div class="b-form-item b-form-item_type_captcha b-form-item_style_default">
                    <label for="captcha" class="b-form-item__label">
                        @lang('feedback::index.captcha')
                        <span> *</span>
                    </label>
                    <div class="b-form-item__input-image">
                            {!! captcha_img('flat') !!}
                    </div>
                    <div class="b-form-item__input">
                        <input type="text" name="captcha" id="captcha" @lang('feedback::index.captcha_placeholder')>
                    </div>
                    @if ($errors->has('captcha'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('captcha') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__button">
                <input type="submit" class="b-button b-button_block b-button_color_green b-button_size_lg b-button_bold"
                        value="@lang('feedback::index.send')">
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

{{--
@section('content')
    <div class="feedback">

        <div class="row">
            <div class="col-md-6">
                <div class="feedback__left">
                    <div class="feedback__title">@lang('feedback::index.contacts')</div>
                    <div class="feedback__item">

                        {!! $page->content !!}
                    </div>
                    <div class="feedback__title">@lang('feedback::index.location')</div>
                    <div class="feedback__item">
                        <div class="feedback__map" id="map">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feedback__right">
                    {!! Form::open(['action' => '\App\Modules\Feedback\Http\Controllers\IndexController@store'])  !!}
                    <div class="feedback__title">@lang('feedback::index.form_title')
                    </div>

                    @include('common.errors')

                    <div class="feedback__item">
                        <label class="feedback__label" for="name">@lang('feedback::index.name') *</label>
                        <input type="text" name="name" placeholder="@lang('feedback::index.name_placeholder')" id="name"
                               value="{{old('name')}}">

                        @if ($errors->has('name'))
                            <div class="feedback__error">
                                {{ $errors->first('name') }}
                            </div>
                        @endif

                    </div>
                    <div class="feedback__item">
                        <label class="feedback__label" for="email">@lang('feedback::index.email') *</label>
                        <input type="text" name="email" placeholder="@lang('feedback::index.email_placeholder')" id="email"
                               value="{{old('email')}}">
                        @if ($errors->has('email'))
                            <div class="feedback__error">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="feedback__item">
                        <label class="feedback__label" for="message">@lang('feedback::index.message') *</label>
                             <textarea name="message" cols="80" rows="10" placeholder="@lang('feedback::index.message_placeholder')"
                                       id="message">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                            <div class="feedback__error">
                                {{ $errors->first('message') }}
                            </div>
                        @endif

                    </div>
                    <div class="feedback__item">
                        <label class="feedback__label">@lang('feedback::index.captcha') *
                        </label>

                        <div class="captcha">
                            <div class="captcha__left">
                                <div class="captcha__image">
                                    {!! captcha_img('flat') !!}
                                </div>
                            </div>
                            <div class="captcha__right">
                                <input type="text" name="captcha" id="captcha" placeholder="@lang('feedback::index.captcha_placeholder')">
                                @if ($errors->has('captcha'))
                                    <div class="feedback__error">
                                        {{ $errors->first('captcha') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item">
                        <div class="feedback__button">
                            <input class="btn btn-block btn-default" type="submit" value="@lang('feedback::index.send')">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection--}}
