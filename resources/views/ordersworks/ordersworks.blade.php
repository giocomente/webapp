@extends('layouts.master')

@section('title','Работы')

@section('nav')
    @parent
    <!-- <a href="{{route ('order_create')}}">Добавить Заказ</a> -->
@endsection('nav')

@section('content')
<div class="container">
  <div class="row">

    @foreach($orders as $order) 
      <div class="col-3 border">
        <!-- <div class="container"> -->
          <div class="row">
            <div class="col text-center">{{ Carbon\Carbon::parse($order->date_start)->format('d-m-Y') }}</div>
            <div class="col">{{ Carbon\Carbon::parse($order->date_start)->format('H:i:s') }}</div>
          </div>
          <div class="container">
            <p class="h5 text-center">{{ $order->customer->name }}</p>
            <p> № {{ $order->number_customer }}</p>
          </div>
          <div class="container">
            <p>Счёт: {{ $order->invoice }}</p>
          </div>
          <div class="container">
            <p>{{ $order->note }}</p>
          </div>
        <!-- </div> -->
      </div>

      <div class="col-9 border">
        <div class="container">
          <!-- Подтаблица работы -->
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>Материал</th>
                    <th>Ш</th>
                    <th>В</th>
                    <th>Кол-во</th>
                    <th>Цвет 1</th>
                    <th>Цвет 2</th>
                    <th>Прим.</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->works as $work)
                <tr>
                    <td>{{ $work->material->name }}</td>
                    <td>{{ $work->size_1 }}</td>
                    <td>{{ $work->size_2 }}</td>
                    <td>{{ $work->quantity }}</td>
                    <td>{{ $work->foil->article }}</td>
                    <td>{{ $work->foil_view->article }}</td>
                    <td>{{ $work->note }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!-- <hr> -->

    @endforeach
      
  </div>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection