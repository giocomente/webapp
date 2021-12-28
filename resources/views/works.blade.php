@extends('layouts.master')

@section('title','Работы')

@section('content')
    <div class="nav">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/customers">Клиенты</a>
            <a class="navbar-brand" href="/foils">Пленки</a>
        </nav>
        
    </div>
    <h1 class="my-3 text-centr">Работы:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Клиент</th>
                <th>Номер заказа</th>
                <th>Счет</th>
                <th>Материал</th>
                <th>Ширина</th>
                <th>Высота</th>
                <th>Количество</th>
                <th>Цвет 1ая сторона</th>
                <th>Цвет 2ая сторона</th>
                <th>Примечание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($works as $work)
            <tr>
                <td>{{ $work->order->customer->name }}</td>
                <td>{{ $work->order->number_customer }}</td>
                <td>{{ $work->order->invoice }}</td>
                <td>{{ $work->material->name }}</td>
                <td>{{ $work->size_1 }}</td>
                <td>{{ $work->size_2 }}</td>
                <td>{{ $work->quantity }}</td>
                <td>{{ $work->foil->name }}</td>
                <td>{{ $work->foil_view->name }}</td>
                <td>{{ $work->note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footerScripts')
    @parent
@endsection