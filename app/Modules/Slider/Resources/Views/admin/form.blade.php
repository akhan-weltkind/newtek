@extends('admin::admin.form')

@section('form_content')


    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
    'files' => true]) !!}

    <div class="col-md-5">
        {!! BootForm::text('title', trans('slider::admin.fields.title')) !!}
        {!! BootForm::select('title_color', trans('slider::admin.fields.titleColor'),$colors) !!}
        {!! BootForm::textarea('preview', trans('slider::admin.fields.preview')) !!}

    </div>
    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::text('link', trans('slider::admin.fields.link'), null , [ 'placeholder' => 'https://www.google.com'] ) !!}
        {!! BootForm::select('link_type', trans('slider::admin.fields.linkType'),$linkTypes) !!}
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', 'Опубликовать', 1) !!}
    </div>
    <div class="clearfix"></div>

    <div class="col-md-5">
        @include('admin::common.forms.image', [
            'entity'        =>$entity,
            'routePrefix'   =>$routePrefix,
            'field'         =>'main_image',
            'helpBlock'     => 'Рекомендуемые размеры 370х450'
            ])

    </div>
    <div class="col-md-5 col-md-offset-1">
        @include('admin::common.forms.image', [
            'entity'        =>$entity,
            'imageTitle'    => trans('slider::admin.fields.backgroundImage'),
            'routePrefix'   =>$routePrefix,
            'field'         =>'background_image',
            'helpBlock'     => 'Рекомендуемые размеры 1078х500'
              ])
    </div>


@endsection