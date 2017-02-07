@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('date', ' Дата')</th>
    <th>@sortablelink('title', ' Название')</th>
    <th>@sortablelink('code', 'Артикул')</th>
    <th>Изображение</th>
    <th>Управление</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->date }}</td>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->code }}</td>
            <td><img width="150" src="/uploads/catalog/mini/{{ $entity->image }}" alt="{{ $entity->title }}" /></td>
            <td class="controls">
                @include ('admin::common.controls.edit', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
                @include ('admin::common.controls.destroy', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
            </td>
        </tr>
    @endforeach
@endsection