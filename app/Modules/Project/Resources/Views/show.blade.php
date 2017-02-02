@extends('layouts.inner')

@section('content')


@if(!$entity->images->isEmpty())
    <div class="project__slider">
        @foreach( $entity->images as $image)
            <div class="project__slide">
                <a rel="group" href="{{$image->image_full}}"><img src="{{$image->image_full}}" alt="pic"/></a>
            </div>
        @endforeach
    </div>
@endif

@if($entity->content)
    {!! $entity->content !!}
@endif
<a class="post__back" href="{{route($page->slug)}}">@lang('project::index.back')</a>
@include('parts.social')
@endsection
