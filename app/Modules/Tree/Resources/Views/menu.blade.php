@if (count($items))
    <nav class="menu">
        <ul class="menu__items">
            @if ($page->parent_id)
                <li class="menu__item menu-item__withoutDown"><a class="menu__item__link" href="{!! home() !!}">@lang('tree::index.home')</a></li>
            @endif
            @foreach ($items as $item)
                @if($item->children()->get()->isEmpty())
                    <li class="menu__item menu-item__withoutDown">
                        <a class="menu__item__link" href="{!! URL::route($item->slug) !!}">
                            {{$item->title}}
                        </a>
                    </li>
                @else
                    <li class="menu__item menu__item-down">
                        <a class="menu__item__link" href="{!! URL::route($item->slug) !!}">
                            {{$item->title}}
                        </a>
                        <div class="menu__items__dropdown__wrap">
                            <ul class="menu__items__dropdown">
                                @foreach($item->children()->get() as $value)

                                    <li class="menu__item__dropdown">
                                        <a href="{!! URL::route($value->slug) !!}">
                                            {{$value->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif

            @endforeach
        </ul>
    </nav>
    <div class="clear"></div>
@endif