@if(!Category::getFirstLevel()->isEmpty())
<div class="side-bar">
    <ul class="side-bar__items">
        @foreach(Category::getFirstLevel() as $item)
            @if(isset($category) && $category == $item->id)
                <li class="side-bar__item side-bar__item_active"><a href="{{ route('catalog.list',['category' => $item->id]) }}">{{ $item->title }}</a></li>
            @else
                <li class="side-bar__item"><a href="{{ route('catalog.list',['category' => $item->id]) }}">{{ $item->title }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
@endif
