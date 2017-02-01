@if ($paginator->hasPages())
    <noindex>
        <div class="pagination">
            <ul>
                @if (!$paginator->onFirstPage())
                    <li class="pagination__item pagination__item_larr">
                        <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" class="pagination__link">
                            @lang('pagination.previous')
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination__item pagination__item_current"><span>{{ $page }}</span></li>
                            @else
                                <li class="pagination__item">
                                    <a href="{{ $url }}" class="pagination__link">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="pagination__item pagination__item_rarr">
                        <a href="#" aria-label="Next" class="pagination__link">
                            @lang('pagination.next')
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </noindex>
@endif

