@extends('layouts.app')

@section('page_content')
<div class="wrapper">
    @include('tree::breadcrumbs')

    <div class="wrapper__left">
        <h1 class="main-title">@yield('h1', @$meta->h1)</h1>

        @yield('content')
        <div class="clear"></div>
    </div>
    <div class="wrapper__right">

        @include('common.details')
    </div>
    <div class="clear"></div>
</div>
<!-- END FORMS-->
@endsection