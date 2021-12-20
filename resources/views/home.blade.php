@extends('layouts.default_layout')

@section('page_title', 'Home - DC Comics')

@section('header_content')
    @include('partials.navbar')
@endsection

@section('main_content')
    @include('partials.hero_section')
@endsection