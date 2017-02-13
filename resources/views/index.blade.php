@extends('layouts.app')

@section('page_content')

    @include('slider::main')

    <div class="wrapper">
        @include('parts.about')
        @include('parts.counts')
    </div>
    @include('parts.advantage')
    <div class="wrapper">
        @include('news::main')
        @include('common.details')
    </div>
@endsection
