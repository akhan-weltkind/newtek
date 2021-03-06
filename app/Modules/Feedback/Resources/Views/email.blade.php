<h2>@lang('feedback::index.emails.title')</h2>

@if($data['name'])
    <h4>@lang('feedback::index.emails.fio')</h4>
    <p>{{ $data['name'] }}</p>
@endif
@if($data['email'])
    <h4>@lang('feedback::index.emails.email')</h4>
    <p>{{ $data['email'] }}</p>
@endif
@if($data['message'])
    <h4>@lang('feedback::index.emails.message')</h4>
    <p>{!! nl2br(e($data['message'])) !!}</p>
@endif
