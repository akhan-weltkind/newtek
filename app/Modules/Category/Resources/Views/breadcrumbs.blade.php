@if ($breadcrumbs)
<div class="bread-crumbs">
    <ul class="g-clearfix">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$breadcrumb->last)
                <li class="bread-crumbs__item">
                    <a href="{{ $breadcrumb->url }}" class="bread-crumbs__link">
                        {{ $breadcrumb->title }}
                    </a>
                    <span class="bread-crumbs__separator"></span>
                </li>
            @else
                <li class="bread-crumbs__item">{{ $breadcrumb->title }}</li>
            @endif


        @endforeach
    </ul>
</div>
@endif