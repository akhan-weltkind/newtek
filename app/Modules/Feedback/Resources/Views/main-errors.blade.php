@if (count($errors) > 0)
    <!-- Список ошибок формы -->
    <div class="error">
        @lang('index.form_error')
    </div>
@endif

@if (session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif