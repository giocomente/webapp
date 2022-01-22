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
            <input name="date_start" readonly value={{ $order->date_start }}  id="date-start" class="form-control">
        </div>

        <div class="form-group">

            <label for="customer-select">Клиент:</label>

            <select name="customer_id" id="customer-select" class="form-select" aria-label="Default select example">
             
                @foreach($customers as $customer)

                    @if ($order->customer_id == $customer->id)
                        <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                    @else
                        <option value={{ $customer->id }}>
                            {{ $customer->name }}
                        </option>
                    @endif
                   
                @endforeach

            </select>

        </div>
        
        <div class="form-group">
            <label for="number-customer">Номер клиента:</label>
            <input value={{ $order->number_customer }} name="number_customer" id="number-customer" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-invoice">Номер счета:</label>
            <input value={{ $order->invoice }} name="invoice" id="order-invoice" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-note">Примечание:</label>
            <input value={{ $order->note }} name="note" id="order-note" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Сохранить">
    </form>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection