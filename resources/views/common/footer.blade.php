<footer class="footer">
    <div class="wrapper">
        <div class="footer__top">
            <div class="footer__logo">
                <a href="{!! home() !!}"><img src="{{ asset('/img/footer-logo.jpg') }}" alt="logo"></a>
            </div>
            @include('tree::footer-menu')
        </div>  <!-- footer__top -->
        <div class="footer__bot">
            <div class="footer__items">
                <div class="footer__item">
                    {!! widget('footer.copyright') !!}
                </div>
                @include('common.footer-language')
                <div class="footer__item footer__item_time">
                    {!! widget('footer.contacts') !!}
                    <a class="callback modalbox" href="#js-feedback">@lang('index.feedback')</a>
                </div>
                <div class="footer__item">
							<span class="develop">@lang('index.siteDev') -
								<a href="http://weltkind.com/" target="_blank" title="Сайт разработан студией Weltkind">Weltkind</a>
							</span>
                </div>
            </div>
        </div>
    </div>  <!-- wrapper -->
</footer>