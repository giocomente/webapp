@extends('layouts.master')

@section('title','Пленки')

@section('nav')
    @parent
    <a href="{{route ('foil_create')}}">Добавить</a>
@endsection('nav')

@section('content')
  
    <h1 class="my-3 text-centr">Пленки:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Марка</th>
                <th>Артикул</th>
                <th>Нименование</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foils as $foil)
            <tr>
                <td>{{ $foil->brand->name }}</td>
                <td>{{ $foil->article }}</td>
                <td>{{ $foil->name }}</td>
                <td>{{ $foil->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footerScripts')
    @parent
@endsection