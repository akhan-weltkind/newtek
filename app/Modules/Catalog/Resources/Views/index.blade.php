@extends('layouts.list')
@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <div class="wrapper__left">
            <h1 class="main-title">{{ $pageTitle }}</h1>
            <div class="catalog__items">
                @if (count($items))
                    @foreach($items as $item)
                        <div class="catalog__item">
                            @if($item->image_thumb)
                                <div class="catalog__item__pic">
                                    <img src="{{ $item->image_thumb }}" alt="{{ $item->title }}">
                                </div>
                            @endif
                            <div class="catalog__info">
                                <h5 class="catalog__title">{{ $item->title }}</h5>
                                <table class="catalog__characteristics">
                                    @if($item->code)
                                    <tr>
                                        <td class="bold">@lang('catalog::front.code')</td>
                                        <td>{{ $item->code }}</td>
                                    </tr>
                                    @endif
                                    @if($item->size)
                                    <tr>
                                        <td class="bold">@lang('catalog::front.size')</td>
                                        <td>{{ $item->size }}</td>
                                    </tr>
                                    @endif
                                    @if($item->power)
                                    <tr>
                                        <td class="bold">@lang('catalog::front.power')</td>
                                        <td>{{ $item->power }}</td>
                                    </tr>
                                        @endif
                                </table>
                                @if($item->preview)
                                    <p>{{ $item->preview }}</p>
                                @endif
                            </div>
                            <a href="{!! URL::route('catalog.show', [ 'category' => $item->category_id,'id' => $item->id]) !!}" class="catalog-mask"></a>
                        </div>
                    @endforeach
                        {{  $items->appends(\Request::except('page'))->links('common.paginate') }}
                        <div class="clear"></div>
                @else
                    <p>@lang('catalog::index.no_records')</p>
                @endif
            <div class="clear"></div>
        </div>
        </div>
        <div class="wrapper__right">
            @include('category::main')
            @include('common.details')
        </div>
        <div class="clear"></div>
    </div>

@endsection