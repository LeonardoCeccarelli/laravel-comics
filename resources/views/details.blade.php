@extends('layouts.default_layout')

@section('page_title', $singleComic['series'] . ' - Details')

@section('header_content')
    @include('partials.navbar')
@endsection

@section('main_content')
    @include('partials.hero_section')
    @include('partials.details_card')
@endsection

@section('footer_content')
    @include('partials.icon_main_bottom')
    @include('partials.the_footer')
@endsection
