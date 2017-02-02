@extends('layouts.list')

@section('content')

@if ( count($items) )
    <div class="project__list">
        @foreach($items as $item)
            <div class="project__item">
                @if($item->image_thumb)
                    <div class="project__item__pic"><img src="{{ $item->image_thumb }}" alt="{{ $item->title }}"></div>
                @endif
                <div class="project__item__info">
                    <h5 class="project__item__tittle">{{ $item->title }}</h5>
                    <p class="project__item__text">{{ $item->preview }}</p>
                    <a class="project__item__mask" href="{!! URL::route('projects.show', $item->id) !!}"></a>
                </div>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
@endif

{{  $items->appends(\Request::except('page'))->links('common.paginate') }}
@endsection


