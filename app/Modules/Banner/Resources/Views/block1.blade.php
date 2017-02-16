{{-- Этот блок выводится в правом сайдбаре --}}
@foreach($banners as $banner)
    @if($banner->image_thumb)
        <a href="{{ $banner->link }}" id="js-banner-{{ $banner->id }}" target="{{ $banner->target }}">
            <img src="{{ $banner->image_thumb }}" alt="{{ $banner->title }}">
        </a>
    @else
        {!! $banner->code !!}
    @endif
@endforeach