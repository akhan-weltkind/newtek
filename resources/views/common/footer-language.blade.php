<div class="footer__item footer__item_lang">
    @if (lang()=='ru')
        <span>@lang('index.selectLang')</span>
        <a class="footer-lang footer-lang_active" href="/ru">Русский</a>
        <span class="lang-helper">/</span>
        <a class="footer-lang" href="/en">English</a>
    @else
        <span>@lang('index.selectLang')</span>
        <a class="footer-lang" href="/ru">Русский</a>
        <span class="lang-helper">/</span>
        <a class="footer-lang footer-lang_active" href="/en">English</a>
    @endif
</div>
