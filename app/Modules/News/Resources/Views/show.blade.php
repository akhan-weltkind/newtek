@extends('layouts.full')

@section('content')
    <div class="post">
        <div class="post__content">
            <span class="news__item__date">{{Date::_('d.m.Y',$entity->date)}}</span>
            @if ($entity->image_thumb)
            <div class="post__pic">
                <img src="{{$entity->image_full}}" alt="pic">
            </div>
            @endif
                {!! $entity->content !!}
            </div>
            <a class="post__back" href="{{route($page->slug)}}">@lang('news::index.back')</a>
            @include('parts.social')
    </div>  <!-- post -->
@endsection