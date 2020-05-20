@extends('layouts.index')

@section('content')
    @include('templates.serviceHeader')
    @include('templates.services')
    @include('templates.servicePhone')
    @include('templates.serviceBlog')
    @include('templates.newsletter')
    @include('templates.contact')
@endsection