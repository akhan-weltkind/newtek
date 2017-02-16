@extends('admin::admin.index')

@section('filters')

    {!! BootForm::open([ 'route' => $routePrefix.'store', 'method' => 'get']) !!}
    <div class="box box-primary box-filters">
        <div class="box-header"></div>
        <div class="box-body">
            <div class="col-md-3">
                {!! BootForm::select('filters[category_id]', 'Категория', Category::getSelect('Все') ,Request::get('filters')['category_id'] ) !!}
            </div>

            <div class="col-md-1" style="margin-top: 3px;">
                {!! BootForm::submit(trans('admin::admin.select')) !!}
            </div>

        </div>
    </div>
    {!! BootForm::close() !!}

@endsection

@section('th')
    <th>@sortablelink('date', 'Дата')</th>
    <th>@sortablelink('title', 'Название')</th>
    <th>@sortablelink('code', 'Артикул')</th>
    <th>Категория</th>
    <th>Изображение</th>
    <th>Управление</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->date }}</td>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->code }}</td>
            <td>{{ Category::getName($entity->category_id) }}</td>
            <td>
                @if($entity->image)
                    <img width="150" src="/uploads/catalog/mini/{{ $entity->image }}" alt="{{ $entity->title }}" />
                @endif
            </td>
            <td class="controls">
                @include ('admin::common.controls.edit', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
                @include ('admin::common.controls.destroy', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
            </td>
        </tr>
    @endforeach
@endsection