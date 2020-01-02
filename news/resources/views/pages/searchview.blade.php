@extends('layouts.app')

@section('content')

@isset($author)
    <searchview-component querystring="{{$querystring}}" author="{{$author}}" ><searchview-component/>
@endisset
    <searchview-component querystring="{{$querystring}}" ><searchview-component/>
@endsection