@extends('layouts.default_layout')

@section('page_title', 'Details - DC Comics')

@section('header_content')
    @include('partials.navbar')
@endsection

@section('main_content')
    @include('partials.hero_section')
@endsection

@section('footer_content')
    @include('partials.icon_main_bottom')
    @include('partials.the_footer')
@endsection