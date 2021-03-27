@extends('template.main')

@section('content')
    @include('home.intro')
    @include('home.about')
    @include('home.testimonial')
    @include('home.service')
    @include('home.team')
    @include('partials.newsletter')
    @include('partials.contact')
@endsection