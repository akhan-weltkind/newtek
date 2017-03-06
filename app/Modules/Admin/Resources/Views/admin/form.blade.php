@extends('admin::layouts.app')

@section('form_js')
    @include('admin::common.forms.datepicker', ['fields'=>[['id'=>'date', 'date'=>date('Y-m-d')]]])
    @include('admin::common.forms.ckeditor',
        [
            'fields' => [
                ['id' => 'content'],
                ['id' => 'technical'],
                ['id' => 'electrical'],
                ['id' => 'preview_widget']
            ]
        ])
@endsection

@section('title')
    <h2><a href="{!! URL::route($routePrefix.'index') !!}">{{$title}}</a></h2>
@endsection

@section('content')
<div class="panel-body">
    @include('admin::common.errors')

    @yield('form_content')

    <div class="col-md-12">
        {!! BootForm::submit() !!}
    </div>

    {!! BootForm::close() !!}
</div>
@endsection