@extends('admin::admin.index')

@section('th')
    <th style="width: 100px;">@sortablelink('created_at', trans('banner::index.admin.fields.created_at'))</th>
    <th style="width: 100px;">@sortablelink('title', trans('banner::index.admin.fields.title'))</th>
    <th style="width: 150px;">@sortablelink('link', trans('banner::index.admin.fields.link'))</th>
    <th style="width: 150px;">@lang('banner::index.admin.fields.banner')</th>
    <th style="width: 100px;">@sortablelink('priority', trans('banner::index.admin.fields.priority'))</th>
    <th>{{ trans('banner::index.admin.control') }}</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->created_at }}</td>
            <td>{{ $entity->title }}</td>
            <td width="200px"><a href="{{ $entity->link }}">Ссылка</a></td>
            <td>
                @if($entity->image_thumb)
                    <img width="150px;" src="{{ $entity->image_thumb }}" alt="{{ $entity->image }}">
                @endif
            </td>
            <td>@include ('admin::common.controls.priority', ['routePrefix'=>$routePrefix, 'entity'=>$entity])</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection