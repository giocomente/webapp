@extends('layouts.master')

@section('title','Редактировать заказ')

<!-- @section('nav')
    @parent
@endsection('nav') -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<div class="container mt-3">
    <form action="{{route('order.edit', ['order_id' => $order->id])}}" method="post">
        @csrf

        <div class="form-group">
            <label for="date-start">Дата:</label>
            <input name="date_start" readonly value="{{ $order->date_start }}"  id="date-start" class="form-control">
        </div>

        <div class="form-group">

            <label for="customer-select">Клиент:</label>

            <select name="customer_id" id="customer-select" class="form-select" aria-label="Default select example">
             
                @foreach($customers as $customer)

                    @if ($order->customer_id == $customer->id)
                        <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                    @else
                        <option value="{{ $customer->id }}">
                            {{ $customer->name }}
                        </option>
                    @endif
                   
                @endforeach

            </select>

        </div>
        
        <div class="form-group">
            <label for="number-customer">Номер клиента:</label>
            <input value="{{ $order->number_customer }}" name="number_customer" id="number-customer" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-invoice">Номер счета:</label>
            <input value="{{ $order->invoice }}" name="invoice" id="order-invoice" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-note">Примечание:</label>
            <input value="{{ $order->note }}" name="note" id="order-note" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Сохранить">
    </form>
</div>
<div class="container mt-3">
    <h3 class="my-3 text-centr">Работы:</h3>

    <a href="{{route ('work.create', ['order_id' => $order->id])}}">Добавить работу</a>

    <table class="table table-striped">
        <thead>
            <tr>
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
            @foreach($order->works as $work)
            <tr>
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
</div>
@endsection

@section('footerScripts')
    @parent
@endsection