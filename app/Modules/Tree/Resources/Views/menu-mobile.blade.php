@if (count($items))

    <nav id="menuVertical" class="menuVertical">
        <ul>
            @foreach ($items as $item)
                @if($item->slug == "catalog")
                    <li>
                        <a class="menuVertical__has-submenu dropdown" href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
                        <button class="menuVertical__show-submenu"></button>
                        <ul>
                            @foreach(Category::getMenus() as $value)
                                <li>
                                    <a href="{!! URL::route('catalog.list',[ 'category' => $value->id ]) !!}">
                                        {{$value->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @elseif($item->children()->get()->isEmpty())
                    <li><a href="{!! URL::route($item->slug) !!}"> {{$item->title}}</a></li>
                @else
                    <li>
                        <a class="menuVertical__has-submenu dropdown" href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
                        <button class="menuVertical__show-submenu"></button>
                        <ul>
                            @foreach($item->children()->get() as $value)
                            <li><a href="{!! URL::route($value->slug) !!}"> {{$value->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endif

            @endforeach
        </ul>
    </nav>
@endif