<h3>@lang('catalog::index.title')</h3>
<div class="catalog-items">
    <div class="catalog-items__wrapper">

        @foreach( $list as $num => $ent)
            <div class="catalog__search-item">
                <div class="catalog__item__pic">
                    <a class="catalog-search-mask" href="{{ URL::route('catalog.show', [ 'category' => $ent->category_id,'id' => $ent->id]) }}">
                    @if($ent->image)
                        <img src="{{ asset('uploads/catalog/thumb/'.$ent->image)}}" alt="">
                    @else
                        <img src="{{ asset('img/zaglushka.png') }}" alt="">
                    @endif
                    <p class="catalog-search-title">{{ $ent->title }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
