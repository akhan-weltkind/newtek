@extends('admin::admin.form')

@section('form_content')


    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
    'files' => true]) !!}


    <div class="col-md-5">
        {!! BootForm::text('title', 'Название Продукта') !!}
    </div>

    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::date('date','Дата',(new DateTime($entity->date))->format('Y-m-d')) !!}
    </div>

    <div class="col-md-5">
        {!! BootForm::select('category_id', 'Категория', Category::getSelect() ) !!}

    </div>

    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::text('size', 'Габариты') !!}
    </div>

    <div class="col-md-5">
        {!! BootForm::textarea('preview', 'Краткий текст', null) !!}
    </div>

    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::text('power', 'Мощность') !!}
        {!! BootForm::text('code', 'Артикул') !!}
        @include('admin::common.forms.image', [
            'entity'=>$entity,
             'routePrefix'=>$routePrefix,
              'field'=>'image',
              'helpBlock'     => 'Рекомендуемые размеры 237х327'
        ])
    </div>

    <div class="col-md-12">
        {!! BootForm::textarea('content', 'Полный текст', null) !!}

    </div>

    <div class="col-md-12">
        {!! BootForm::textarea('technical', 'Технические характеристики', $entity->technical?$entity->technical:$technical) !!}
    </div>

    <div class="col-md-12">
        {!! BootForm::textarea('electrical', 'Электрические характеристики', $entity->electrical?$entity->electrical:$electrical) !!}
    </div>

    <div class="col-md-5">
        {!! BootForm::hidden('technical_active', 0) !!}
        {!! BootForm::checkbox('technical_active', 'Опубликовать технические характеристики', 1) !!}
    </div>

    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::hidden('electrical_active', 0) !!}
        {!! BootForm::checkbox('electrical_active', 'Опубликовать электрические характеристики', 1) !!}
    </div>
    <div class="clearfix"></div>

    @include('catalog::admin.documents',['entity' => $entity])
@endsection