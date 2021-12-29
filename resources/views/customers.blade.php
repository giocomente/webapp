@extends('layouts.master')

@section('title','Клиенты')

@section('nav')
    @parent
@endsection('nav')

@section('content')
 
    <h1 class="my-3 text-centr">Клиенты:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Клиент</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footerScripts')
    @parent
@endsection