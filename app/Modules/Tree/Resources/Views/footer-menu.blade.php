@if(!$footerItems->isEmpty())
<div class="footer__items">
    @for($i = 1; $i < 4; $i++)
        @if(!$footerItems->where('footer_column', $i)->isEmpty())
                <div class="footer__item">
                    <ul class="footer__item__menu">

                        @foreach($footerItems->where('footer_column', $i) as $item)
                            @if($item->slug == "catalog")
                                <li class="footer__item__menu_main">
                                    <a href="{!! URL::route($item->slug) !!}">
                                        {{$item->title}}
                                    </a>
                                </li>
                                @foreach(Category::getMenus() as $value)
                                    <li>
                                        <a href="{!! URL::route('catalog.list',[ 'category' => $value->id ]) !!}">
                                            {{$value->title}}
                                        </a>
                                    </li>
                                @endforeach
                            @elseif($item->children()->get()->isEmpty())
                                <li class="footer__item__menu_main">
                                    <a href="{!! URL::route($item->slug) !!}">
                                        {{$item->title}}
                                    </a>
                                </li>
                            @else
                                <li class="footer__item__menu_main">
                                    <a href="{!! URL::route($item->slug) !!}">
                                        {{$item->title}}
                                    </a>
                                </li>
                                @foreach($item->children()->get() as $value)
                                        <li><a href="{!! URL::route($value->slug) !!}">{{$value->title}}</a></li>
                                @endforeach
                            @endif
                        @endforeach

                    </ul>
                </div>
        @endif
    @endfor
</div>
@endif