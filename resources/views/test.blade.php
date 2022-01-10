@extends('layouts.master')

@section('title','ТЕст')

@section('nav')
    @parent
@endsection('nav')

@section('content')
    
    <h1>{{$brand_id}}</h1>
    <h1>{{$foil_article}}</h1>
    <h1>{{$foil_name}}</h1>
    <h1>{{$foil_price}}</h1>

@endsection

@section('footerScripts')
    @parent
@endsection