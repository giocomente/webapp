@extends('layouts.master')

@section('title','Работы')

@section('nav')
    @parent
    <a href="{{route ('order_create')}}">Добавить Заказ</a>
@endsection('nav')

@section('content')
<div class="container mt-1">

    <!-- <div class="container">
        <div class="alert alert-success mt-5" role="alert">
            Boostrap 5 is working!
        </div>    
    </div> -->

  <div class="row">
    @foreach($orders as $order) 
      
      <div class="col-3 border">
      
        <div class="container">
          {{ Carbon\Carbon::parse($order->date_start)->format('d-m-Y') }}
          <small>
            <em>{{ Carbon\Carbon::parse($order->date_start)->format('H:i:s') }}</em>
          </small>
        </div>

        <div class="container h5 text-center">
          {{ $order->customer->name }}
        </div>

        <div class="container">
          № {{ $order->number_customer }}
        </div>

        <div class="container">
          Счёт: {{ $order->invoice }}
        </div>

        <div class="container">
          {{ $order->note }}
        </div>

        <div class="container text-end mb-3">
          
          <a href=""><em>изменить</em></a>
          
        </div>

      </div>

      <div class="col-9 border">
        <!-- <div class="container"> -->
          <!-- Подтаблица работы -->
          <table class="table table-sm">
          <caption>Общая площадь: </caption>
            <thead>
                <tr>
                    <th scope="col">Материал</th>
                    <th scope="col">Ш</th>
                    <th scope="col">В</th>
                    <th scope="col">Кол-во</th>
                    <th scope="col">Цвет 1</th>
                    <th scope="col">Цвет 2</th>
                    <th scope="col">Прим.</th>
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
        <!-- </div> -->
      </div>

      <!-- <hr> -->

    @endforeach
      
  </div>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection