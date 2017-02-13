@extends('admin::admin.index')

@section('topmenu')
    <div class="header-module-controls">
        @include('admin::common.topmenu.list', ['routePrefix'=>$routePrefix])
        @if (isset($entities))
            <a class="btn btn-primary" href="{!! route($routePrefix.'create', ['parent'=>@$entities[0]->id]) !!}">
                <i class="glyphicon glyphicon-plus"></i> @lang('admin::admin.add')
            </a>
        @endif
    </div>
@endsection


@section('content')
    @include('admin::common.errors')
    @if (count($entities) > 0)
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>@sortablelink('title', trans('category::admin.title'))</th>
                <th>@lang('admin::fields.priority')</th>
                <th>@lang('admin::admin.control')</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($entities as $entity)
                <tr>

                    <td>
                        {{ $entity->title }}
                    </td>
                    <td class="priority">
                        @include ('admin::common.controls.priority', ['routePrefix'=>$routePrefix, 'entity'=>$entity])
                    </td>
                    <td class="controls">
                        @include ('admin::common.controls.edit', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
                        @include ('admin::common.controls.destroy', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $entities->appends(\Request::except('page'))->render() !!}
    @else
        <p>
            <a href="{!! route($routePrefix.'create') !!}" class="btn btn-primary icon-plus icon-white ">
                <span>@lang('tree::admin.create_root')</span>
            </a>
        </p>
    @endif
@endsection
