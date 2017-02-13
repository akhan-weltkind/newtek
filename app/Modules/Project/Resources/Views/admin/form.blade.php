@extends('admin::admin.form')

@section('form_content')


    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
   'files' => true]) !!}


    <div class="col-md-5">
        {!! BootForm::text('title', trans('project::admin.fields.title')) !!}
    </div>

    <div class="col-md-5 col-md-offset-1">

        {!! BootForm::date('date',trans('admin::fields.date'),(new DateTime($entity->date))->format('Y-m-d')) !!}
    </div>

    <div class="col-md-5">
        {!! BootForm::textarea('preview', trans('project::admin.fields.preview')) !!}
    </div>

    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', trans('project::admin.fields.active'), 1) !!}
        @include('admin::common.forms.image', [
            'entity'=>$entity,
            'routePrefix'=>$routePrefix,
            'field'=>'main_image',
            'helpBlock'     => 'Рекомендуемые размеры 368х200'
        ])
    </div>

    <div class="col-md-12">
        {!! BootForm::textarea('content', trans('project::admin.fields.content'), null) !!}
        <div class="clearfix"></div>
    </div>

    <div class="col-md-12">
        @include('admin::images.form', [
            'id'=>$entity->id,
            'routePrefix'=>$routePrefix.'images.',
            'helpBlock'     => 'Рекомендуемые размеры 880х400'
        ])
    </div>


@endsection