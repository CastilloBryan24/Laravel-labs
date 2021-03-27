@extends('template.main')

@section('content')
    @include('service.header')
    @include('service.service')
    @include('service.features')
    @include('service.card')
    @include('partials.newsletter')
    @include('partials.contact')
@endsection