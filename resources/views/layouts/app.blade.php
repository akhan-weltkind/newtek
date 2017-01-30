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
        <link href="/css/social-likes_birman.css" rel="stylesheet">
        <link href="/css/slick.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/media.css" rel="stylesheet">
        <link href="/css/fonts.css" rel="stylesheet">

        @stack('css')

        <!--[if lt IE 9]>
            <script src="js/jquery-1.11.1.min.js"></script>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <script src="js/jquery-2.1.4.min.js"></script>
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
    @section('slider')
            @include('slider::main')
    @show


    <div class="page__buffer"></div>
</div>
</div>
{{--<div class="page__content">
    <div class="page__wrapper">
        <div class="page__header">
            <header class="header">
                <div class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navbar</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{!! home() !!}">
                                <img src="/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            @include('tree::menu')

                            @include('common.languages')

                            <form class="navbar-form navbar-right" action="#" method="get">
                                <div class="input-group">
                                    <input type="text" required placeholder="Поиск">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="page__main">
            <div class="container">
                @section('page_content')
                @show
            </div>
        </div>
        <div class="page__buffer"></div>
    </div>
    <div class="page__footer">
        <footer class="footer">
            <div class="container">
                <address>{!! widget('footer') !!}</address>
            </div>
        </footer>
    </div>
</div>--}}
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.basictable.js"></script>
<script src="js/jquery.spincrement.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="js/social-likes.min.js"></script>
<script src="js/jquery.formstyler.js"></script>
<script src="js/core.js"></script>

@stack('js')

</body>

</html>

