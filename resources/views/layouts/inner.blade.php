@extends('layouts.app')
@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <h1 class="main-title">@yield('h1', @$meta->h1)</h1>
        <div class="wrapper__left">
            @yield('content')
            <div class="clear"></div>
        </div>
        <div class="wrapper__right">
            <div class="details">
                <div class="details__item  details__item_more">
                    <h5 class="details__title">Узнайте больше <br> о солнечных модулях</h5>
                    <a href="#" class="more-link">Узнать больше</a>
                    <a href="#" class="details-mask"></a>
                </div>
                <div class="details__item  details__item_sert">
                    <h5 class="details__title">Сертификаты <br>и гарантии качества</h5>
                    <a href="#" class="more-link">Узнать больше</a>
                    <a href="#" class="details-mask"></a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection