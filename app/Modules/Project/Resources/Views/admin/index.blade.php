@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('date', ' Дата')</th>
    <th>@sortablelink('title', ' Название')</th>
    <th>Изображение</th>
    <th>Управление</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->date }}</td>
            <td>{{ $entity->title }}</td>
            <td>
                @if($entity->main_image)
                    <img width="150" src="/uploads/project/main/{{ $entity->main_image }}" alt="{{ $entity->title }}" />
                @endif
            </td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection