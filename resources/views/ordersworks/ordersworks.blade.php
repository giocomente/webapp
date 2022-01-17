@extends('layouts.master')

@section('title','Работы')

@section('nav')
    @parent
    <!-- <a href="{{route ('order_create')}}">Добавить Заказ</a> -->
@endsection('nav')

@section('content')
  <!-- Таблица заказы -->
  <!-- <table class="table table-striped">
    <thead>
      <tr>
        <th>Дата</th>
        <th>Клиент</th>
        <th>Номер</th>
        <th>Счет</th>
        <th>Примечание</th>
      </tr>
    </thead>
    <tbody> -->
      @foreach($orders as $order)
        <!-- <tr>
          <td>{{ $order->date_start }}</td>
          <td>{{ $order->customer->name }}</td>
          <td>{{ $order->number_customer }}</td>
          <td>{{ $order->invoice }}</td>
          <td>{{ $order->note }}</td>
        </tr> -->
        <div class="container">
          <div class="container">
            <time datetime="<дата и время>">{{ $order->date_start }}</time>
          </div>
          <div class="container">
            <p>{{ $order->customer->name }} - {{ $order->number_customer }}</p>
          </div>
          <div class="container">
            <p>Счёт: {{ $order->invoice }}</p>
          </div>
          <div class="container">
            <p>{{ $order->note }}</p>
          </div>
        </div>
        <div class="container">
          <!-- Подтаблица работы -->
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
        <hr>

      @endforeach
    <!-- </tbody>
  </table> -->

@endsection

@section('footerScripts')
    @parent
@endsection