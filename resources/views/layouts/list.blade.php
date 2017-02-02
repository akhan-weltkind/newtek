@extends('layouts.app')
@section('page_content')
    <div class="wrapper">
        @include('tree::breadcrumbs')

        <h1 class="main-title">@yield('h1', @$meta->h1)</h1>

        @yield('content')

        <div class="clear"></div>
    </div>
    <!-- END FORMS-->
@endsection