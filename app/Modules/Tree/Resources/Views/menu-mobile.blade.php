@if (count($items))

    <nav id="menuVertical" class="menuVertical">
        <ul>
            @foreach ($items as $item)
                @if($item->children()->get()->isEmpty())
                    <li><a href="{!! URL::route($item->slug) !!}"> {{$item->title}}</a></li>
                @else
                    <li><a href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
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