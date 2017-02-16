@push('css')

@endpush

@extends('layouts.inner')

@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <h1 class="main-title">{{ $meta->h1?$meta->h1:$pageTitle }}</h1>
        <div class="wrapper__left">
            <div class="catalog__item_full">
                <div class="catalog__item">
                    @if($entity->image_thumb)
                        <div class="catalog__item__pic">
                            <a  class="product-colorbox" href="{{ $entity->image_thumb }}">
                                <img src="{{ $entity->image_thumb }}" alt="{{ $entity->title }}">
                            </a>
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
                        <p>{!! $entity->preview !!}</p>
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
                <div class="buttons-wrap">
                    <div class="catalog-full__button-content">
                        @if($entity->document1)
                            <a href="{{ asset('uploads/catalog/files/' . $entity->document1) }}" class="download-btn">{{ $entity->name1?$entity->name1:'Файл 1' }}</a>
                        @endif
                        @if($entity->document2)
                            <a href="{{ asset('uploads/catalog/files/' . $entity->document2) }}" class="download-btn">{{ $entity->name2?$entity->name2:'Файл 2' }}</a>
                        @endif
                    </div>
                    <div class="catalog-full__button-content">
                        @if($entity->document3)
                            <a href="{{ asset('uploads/catalog/files/' . $entity->document3) }}" class="download-btn">{{ $entity->name3?$entity->name3:'Файл 3' }}</a>
                        @endif
                        @if($entity->document4)
                            <a href="{{ asset('uploads/catalog/files/' . $entity->document4) }}" class="download-btn">{{ $entity->name4?$entity->name4:'Файл 4' }}</a>
                        @endif
                    </div>
                </div>

                <p>{!! $entity->content !!}</p>
                <a class="post__back" href="{{URL::route('catalog.list',$entity->category_id)}}">@lang('catalog::index.back')</a>
                @include('parts.social')
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