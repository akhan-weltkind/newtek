
    <div class="search">
        <form action="{{ route('search') }}" method="post">
            {{ csrf_field() }}
                <input class="search__input" type="text" name="query" required minlength="3" value="{{ $query }}" maxlength="255" placeholder="@lang('search::index.input_placeholder')">
                <button type="submit" class="search_btn"></button>
            </form>
    </div>


