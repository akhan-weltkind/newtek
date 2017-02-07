@extends('layouts.list')

@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <h1 class="main__title">@yield('h1', @$meta->h1)</h1>
        @if (count($items))
            @foreach($items as $entity)
                @if($entity->image)
                    <div class="news__point">
                        <div class="news__point__pic">
                            <img src="{{$entity->image_full}}" alt="pic">
                        </div>
                        <div class="news__point__info">
                            <span class="news__item__date">{{ date_format(date_create($entity->date), 'd.m.Y') }}</span>
                            <h5 class="news__point__title link-dashed">{{ $entity->title }}</h5>
                            <p class="news__point__text">{{ $entity->preview }}</p>
                            <a class="news__point__mask" href="{{route($page->slug.'.show', $entity)}}"></a>
                        </div>
                    </div>
                @else
                    <div class="news__point news__point_without-pic">
                        <div class="news__point__info">
                            <span class="news__item__date">{{ date_format(date_create($entity->date), 'd.m.Y') }}</span>
                            <h5 class="news__point__title link-dashed">{{ $entity->title }}</h5>
                            <p class="news__point__text">{{ $entity->preview }}</p>
                            <a class="news__point__mask" href="{{route($page->slug.'.show', $entity)}}"></a>
                        </div>
                    </div>
                @endif
            @endforeach
                {{  $items->appends(\Request::except('page'))->links('common.paginate') }}
            <div class="clear"></div>
        @else
            <p>@lang('news::index.no_records')</p>
        @endif
    </div>
@endsection