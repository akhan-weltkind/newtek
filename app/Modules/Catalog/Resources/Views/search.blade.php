<h3>@lang('catalog::index.title')</h3>
<div class="catalog-items">

        @foreach( $list as $num => $ent)
            <div class="catalog__item">
                    @if($ent->image)
                        <div class="catalog__item__pic">
                            <img src="{{ asset('uploads/catalog/thumb/'.$ent->image)}}" alt="{{ $ent->title }}">
                        </div>
                    @else
                        <div class="catalog__item__pic">
                            <img src="{{ asset('img/zaglushka.png') }}" alt="{{ $ent->title }}">
                        </div>
                    @endif

                    <div class="catalog__info">
                        <h5 class="catalog__title">{!!  $ent->title !!}</h5>
                        <table class="catalog__characteristics">
                            @if($ent->code)
                                <tr>
                                    <td class="bold">@lang('catalog::front.code')</td>
                                    <td>{{ $ent->code }}</td>
                                </tr>
                            @endif
                            @if($ent->size)
                                <tr>
                                    <td class="bold">@lang('catalog::front.size')</td>
                                    <td>{{ $ent->size }}</td>
                                </tr>
                            @endif
                            @if($ent->power)
                                <tr>
                                    <td class="bold">@lang('catalog::front.power')</td>
                                    <td>{{ $ent->power }}</td>
                                </tr>
                            @endif
                        </table>
                        @if($ent->preview)
                            <p>{!! $ent->preview !!}</p>
                        @endif
                    </div>
                    <a href="{!! URL::route('catalog.show', [ 'category' => $ent->category_id,'id' => $ent->id]) !!}" class="catalog-mask"></a>
                </div>
        @endforeach
</div>

