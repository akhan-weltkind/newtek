@extends('layouts.inner')

@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <h1 class="main-title">@yield('h1', @$meta->h1)</h1>
        <div class="wrapper__left">
            <div class="catalog__item_full">
                <div class="catalog__item">
                    @if($entity->image_thumb)
                        <div class="catalog__item__pic">
                            <img src="{{ $entity->image_thumb }}" alt="{{ $entity->title }}">
                        </div>
                    @endif
                    <div class="catalog__info">
                        <h5 class="catalog__title">{{ $entity->title }}</h5>
                        <table class="catalog__characteristics">
                            @if($entity->code)
                                <tr>
                                    <td class="bold">@lang('catalog::front.code')</td>
                                    <td>{{ $entity->code }}</td>
                                </tr>
                            @endif
                            @if($entity->size)
                                <tr>
                                    <td class="bold">@lang('catalog::front.size')</td>
                                    <td>{{ $entity->size }}</td>
                                </tr>
                            @endif
                            @if($entity->power)
                                <tr>
                                    <td class="bold">@lang('catalog::front.power')</td>
                                    <td>{{ $entity->power }}</td>
                                </tr>
                            @endif
                        </table>
                        <p>{!! $entity->content !!}</p>
                    </div>
                </div>
                <div class="catalog-full__descr">
                    @if($entity->technical_active)
                        {!! $entity->technical !!}
                    @endif

                    @if($entity->electrical_active)
                        {!! $entity->electrical !!}
                    @endif
                </div>
                <button class="download-btn">Скачать характеристики</button>
                <button class="download-btn download-btn">Скачать прайс-лист</button>
            </div>
            <div class="clear"></div>
        </div>
        <div class="wrapper__right">
            @include('category::main')
            @include('common.details')
        </div>
        <div class="clear"></div>
    </div>
@endsection