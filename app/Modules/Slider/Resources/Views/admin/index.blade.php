@extends('admin::admin.index')

@section('filters')
    {!! BootForm::open([ 'route' => 'admin.settings.store', 'method' => 'post']) !!}
    <div class="box box-primary">
        <div class="box-header"></div>
        <div class="box-body">
            <div class="col-md-3">
                {!! BootForm::text('settings[slider_interval]', trans('slider::admin.fields.interval'),  Settings::get('slider_interval')) !!}
            </div>
            <div class="col-md-2">
                {!! BootForm::submit(trans('slider::admin.fields.save')) !!}
            </div>

        </div>
    </div>
    {!! BootForm::close() !!}
@endsection

@section('th')
    <th style="width: 180px;">@sortablelink('title', trans('slider::admin.fields.title'))</th>
    <th style="width: 150px;">@sortablelink('main_image', trans('slider::admin.fields.image'))</th>
    <th style="width: 150px;">@sortablelink('background_image', trans('slider::admin.fields.backgroundImage'))</th>
    <th style="width: 200px;">@sortablelink('link', trans('slider::admin.fields.link'))</th>
    <th>@sortablelink('priority', trans('slider::admin.fields.priority'))</th>
    <th>{{ trans('slider::admin.fields.control') }}</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->title }}</td>
            <td><img src="/uploads/slider/mini/{{ $entity->main_image }}" alt=""></td>
            <td><img src="/uploads/slider/mini/{{ $entity->background_image }}" alt=""></td>
            <td><a href="{{ $entity->link }}">{{ $entity->link }}</a></td>
            <td>@include ('admin::common.controls.priority', ['routePrefix'=>$routePrefix, 'entity'=>$entity])</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection