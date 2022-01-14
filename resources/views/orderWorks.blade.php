@extends('layouts.master')

@section('title','Заказ-Работы')

@section('nav')
    @parent
    <!-- <a href="{{route ('order_create')}}">Добавить Заказ</a> -->
@endsection('nav')

@section('content')
    <h3 class="my-3 text-centr">Заказ № {{ $order->id}} {{ $order->customer->name }}:</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Дата</th>
                <!-- <th>Клиент</th> -->
                <th>Номер</th>
                <th>Счет</th>
                <th>Примечание</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->date_start }}</td>
                <!-- <td>{{ $order->customer->name }}</td> -->
                <td>{{ $order->number_customer }}</td>
                <td>{{ $order->invoice }}</td>
                <td>{{ $order->note }}</td>
            </tr>
        </tbody>
    </table>
    
    <h3 class="my-3 text-centr">Работы:</h3>

    <a href="{{route ('work_create', ['order_id' => $order->id])}}">Добавить работу</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <!-- <th>Клиент</th>
                <th>Номер заказа</th>
                <th>Счет</th> -->
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
                <!-- <td>{{ $work->order->customer->name }}</td>
                <td>{{ $work->order->number_customer }}</td>
                <td>{{ $work->order->invoice }}</td> -->
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