@extends('layouts.master')

@section('title','Новый заказ')

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
    <form action="{{route('order_store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="date-start">Дата:</label>
            <input name="date_start" readonly value="{{Carbon\Carbon::now()->timezone('Europe/Samara')->format('d-m-Y H:i:s')}}"  id="date-start" class="form-control">
        </div>

        <div class="form-group">
            <label for="customer-select">Клиент:</label>
            <select name="customer_id" id="customer-select" class="form-select" aria-label="Default select example">
                <!-- <option selected>- Клиент -</option> -->
                <option value={{ null }}>
                        - Выбор Клиента -
                    </option>
                @foreach($customers as $customer)
                    <option value={{ $customer->id }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="number-customer">Номер клиента:</label>
            <input name="number_customer" id="number-customer" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-invoice">Номер счета:</label>
            <input name="invoice" id="order-invoice" class="form-control">
        </div>

        <div class="form-group">
            <label for="order-note">Примечание:</label>
            <input name="note" id="order-note" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Сохранить и перейти к работам">
    </form>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection