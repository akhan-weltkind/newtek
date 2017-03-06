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
        <link href="/css/social-likes_birman.css" rel="stylesheet">
        <link href="/css/jquery.formstyler.css" rel="stylesheet">
        <link href="/css/slick.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/media.css" rel="stylesheet">
        <link href="/css/fonts.css" rel="stylesheet">
        <link href="/css/jquery.fancybox.css" rel="stylesheet">

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
                        @if(isset($page->parent_id) && !empty($page->parent_id))
                            <a class="logo-back" href="{!! home() !!}">@lang('index.home')</a>
                            <a class="logo-a" href="{!! home() !!}"></a>
                        @else
                            <a class="logo-index" href="{!! home() !!}"></a>
                        @endif
                    </div>
                    <div class="header__info">
                        <div class="header__info_top">
                            @include('common.languages')
                            <div class="header__contacts">
                                <span class="header__contacts_phone">{!! widget('head.phone') !!}</span>
                                <a class="header__contacts_feedback modalbox fancybox.ajax" href="{{ route('feedback.getModal') }}" {{--href="#js-feedback"--}}>@lang('index.feedback')</a>
                                <a href="{{ home() }}/contacts" class="header__contacts_buy">@lang('index.where_buy')</a>
                                @include('search::main')
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

@stack('js')
<script src="{{asset('js/jquery.formstyler.js')}}"></script>
<script src="{{asset('js/core.js')}}"></script>

<!--
        This page took {{ (microtime(true) - LARAVEL_START) }} seconds to render -->
</body>

</html>

