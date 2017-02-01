@push('css')
    <link href="/css/social-likes_birman.css" rel="stylesheet">
@endpush

@push('js')
    <script src="{{asset('js/social-likes.min.js')}}"></script>
@endpush

<div class="social-likes" data-counters="no">
    <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
    <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
    <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
    <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
    <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
</div>