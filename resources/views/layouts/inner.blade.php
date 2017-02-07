@extends('layouts.app')
@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')
        <h1 class="main-title">@yield('h1', @$meta->h1)</h1>
        <div class="wrapper__left">
            @yield('content')
            <div class="clear"></div>
        </div>
        <div class="wrapper__right">
            @include('common.details')
        </div>
        <div class="clear"></div>
    </div>
@endsection