@if (count($items))
    <div class="news">
        <h2 class="news-title"><a href="{!! route('news.list') !!}">@lang('news::index.title')</a></h2>
        <a href="{!! route('news.list') !!}" class="more-link">@lang('news::index.titleAll')</a>
        <div class="news__items">
            @foreach($items as $item)
                <div class="news__item">
                    <span class="news__item__date">{{ $item->date }}</span>
                    <h5 class="news__name">
                        <a class="link-dashed" href="{!! route('news.show', $item->id) !!}">
                            {{$item->title}}
                        </a>
                    </h5>
                    <p>
                        {!! nl2br(e($item->preview)) !!}
                    </p>
                    <a class="news-main__item__mask" href="{!! route('news.show', $item->id) !!}"></a>
                </div>
            @endforeach
        </div>
    </div>
@endif