@extends('layouts.master')

@section('title','Заказы')

@section('nav')
    @parent
    <a href="{{route ('order_create')}}">Добавить</a>
@endsection('nav')

@section('content')
  
    <h1 class="my-3 text-centr">Заказы:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Дата заказа</th>
                <th>Клиент</th>
                <th>Номер клиента</th>
                <th>Счет</th>
                <th>Примечание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->date_start }}</td>
                <td>{{ $order->customer->name }}</td>
                <td>{{ $order->number_customer }}</td>
                <td>{{ $order->invoice }}</td>
                <td>{{ $order->note }}</td>
                <td><a href="{{route ('orderWorks', ['order_id' => $order->id])}}">show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footerScripts')
    @parent
@endsection