@extends('admin::admin.form')

@section('form_content')


    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
    'files' => true]) !!}

    <div class="col-md-5">
        {!! BootForm::text('title', trans('banner::index.admin.fields.title')) !!}
    </div>
    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', trans('banner::index.admin.fields.active'), 1) !!}
    </div>
    <div class="clearfix"></div>

    <div class="col-md-5">
        {!! BootForm::text('link', trans('banner::index.admin.fields.link'), null , [ 'placeholder' => 'https://www.google.com'] ) !!}
    </div>
    <div class=" col-md-5 col-md-offset-1">
        {!! BootForm::select('target', trans('banner::index.admin.fields.target'),[
            '_self' => trans('banner::index.admin.fields.self'),
            '_blank' => trans('banner::index.admin.fields.blank'),
        ]) !!}
    </div>
    <div class="clearfix"></div>

    <div class="col-md-12">
        @include('admin::common.forms.image', [
            'entity'=>$entity,
            'routePrefix'=>$routePrefix,
            'field'=>'image',
            'helpBlock'     => 'Загружайте файлы с расширением jpg, png, gif.<br /> Рекомендуемый размер 290x260'
        ])
    </div>
    <div class="clearfix"></div>

    <br />
    <div class="col-md-12">
        {!! BootForm::textarea('code', trans('banner::index.admin.fields.code')) !!}
    </div>




@endsection