<!DOCTYPE html>
<html class="no-js" lang="{!! lang() !!}">

<head>
    <meta charset="utf-8">

    @hasSection('meta-title')
        <title>@yield('meta-title')</title>
        @elseif(isset($meta->title) && $meta->title)
            <title>{{$meta->title}}</title>
        @endif

        @if(isset($og->site_name) && $og->site_name)
            <meta property="og:site_name" content="{{$og->site_name}}" />
        @endif

        @if(isset($og->image) && $og->image)
            <meta property="og:image" content="{{$og->image}}" />
        @endif

        @if(isset($og->title) && $og->title)
            <meta property="og:title" content="{{$og->title}}" />
        @endif

        @if(isset($og->description) && $og->description)
            <meta property="og:description" content="{{$og->description}}" />
        @endif

        @if(isset($meta->keywords) && $meta->keywords)
            <meta name="keywords" content="{{$meta->keywords}}" />
        @endif

        @if(isset($meta->description) && $meta->description)
            <meta name="description" content="{{$meta->description}}" />
        @endif

        <meta name="format-detection" content="telephone=no">
        <meta name="robots" content="noodp, noydir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="theme-color" content="#ffffff">


        <link href="/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">

        <link href="/css/basictable.css" rel="stylesheet">
        <link href="/css/jquery.fancybox.css" rel="stylesheet">
        <link href="/css/slick.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/media.css" rel="stylesheet">
        <link href="/css/fonts.css" rel="stylesheet">

        @stack('css')

        <!--[if lt IE 9]>
            <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <!--<![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<p class="browsehappy">@lang('index.old_browser')</p>
<![endif]-->
<div class="b-page">
    <div class="b-page__wrapper">
        @section('header')
            <div class="wrapper">
                <header class="header">
                    <div class="logo">
                        <a class="logo-back" href="{!! home() !!}">Вернуться на главную</a>
                        <a class="logo-a" href="{!! home() !!}"></a>
                    </div>
                    <div class="header__info">
                        <div class="header__info_top">
                            @include('common.languages')
                            <div class="header__contacts">
                                <span class="header__contacts_phone">{!! widget('head.phone') !!}</span>
                                <a class="header__contacts_feedback modalbox" href="#feedback">Обратная связь</a>
                                <div class="feedback" id="feedback">
                                    <form id="f_contact" name="contact" action="#" method="post">
                                        <h6>Напишите нам:</h6>
                                        <div class="b-form">
                                            <div class="b-form__item">
                                                <div class="b-form-item b-form-item_type_text b-form-item_style_default">
                                                    <label for="name" class="b-form-item__label">Ваше имя:
                                                        <span class="form-item__label_required">*</span>
                                                    </label>
                                                    <div class="b-form-item__input">
                                                        <input type="text" name="name" placeholder="Введите ваше имя" id="name">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="b-form__item">
                                                <div class="b-form-item b-form-item_type_email b-form-item_style_default">
                                                    <label for="email" class="b-form-item__label">Ваш email:
                                                        <span class="form-item__label_required">*</span>
                                                    </label>
                                                    <div class="b-form-item__input">
                                                        <input type="email" name="email" placeholder="info@example.com" id="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" title="Введите верный адрес email">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="b-form__item">
                                                <div class="b-form-item b-form-item_type_textarea b-form-item_style_default">
                                                    <label for="textarea" class="b-form-item__label">Сообщение:
                                                        <span class="form-item__label_required">*</span>
                                                    </label>
                                                    <div class="b-form-item__input">
                                                        <textarea name="textarea" cols="80" rows="24" placeholder="Введите сообщение" id="textarea"></textarea>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="b-form__item">
                                                <div class="b-form-item b-form-item_type_captcha b-form-item_style_default">
                                                    <label for="captcha" class="b-form-item__label">Спам фильтр<span> *</span></label>
                                                    <div class="b-form-item__input-image"><a href="#" title="Reload image"><img src="img/captcha.png" height="40" width="120" alt="Captcha"></a></div>
                                                    <div class="b-form-item__input">
                                                        <input type="text" name="captcha" id="captcha">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="b-form__button">
                                                <button type="button" class="b-button b-button_block b-button_color_green b-button_size_lg b-button_bold" id="f_send">Отправить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>  <!-- feedback -->
                                <span class="header__contacts_buy">Где купить</span>
                                <div class="search">
                                    <input class="search__input" type="text" placeholder="поиск">
                                    <button class="search_btn"></button>
                                </div>
                            </div>
                        </div>
                        <div class="header__info_bot">
                            @include('tree::menu')
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <button class="btn-toggle"></button>
                </header>
            </div>
            <div class="wrapper">
            @include('tree::menu-mobile')
            </div>
        @show
        @section('page_content')
        @show

        <div class="page__buffer"></div>
    </div>
    @include('common.footer')

</div>

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/jquery.basictable.js')}}"></script>
<script src="{{asset('js/jquery.spincrement.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('js/jquery.formstyler.js')}}"></script>
<script src="{{asset('js/core.js')}}"></script>

@stack('js')

</body>

</html>

