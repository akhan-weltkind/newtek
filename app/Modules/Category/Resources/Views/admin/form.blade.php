@extends('admin::admin.form')

@section('topmenu')
    <div class="header-module-controls">
        @include('admin::common.topmenu.list', ['routePrefix'=>$routePrefix])
            <a class="btn btn-primary" href="{!! route($routePrefix.'create', ['parent'=>@$entity->parent?:Request::get('parent')]) !!}">
                <i class="glyphicon glyphicon-plus"></i> @lang('admin::admin.add')
            </a>
    </div>
@endsection

@section('form_content')

{!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update']) !!}


<div class="col-md-6">
    {!! BootForm::text('title', trans('category::admin.title_page')) !!}
</div>
<div class="clearfix"></div>

<div class="col-md-12">
    {!! BootForm::textarea('preview_widget', trans('category::admin.preview'), null) !!}
</div>

@include('admin::common.forms.seo')

@endsection