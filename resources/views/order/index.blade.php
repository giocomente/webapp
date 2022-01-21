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
          
          <!-- <a href=""><em>изменить</em></a> -->
            <button type="submit" class="btn btn-primary mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
            </button>

          <form action="{{ route('order.destroy', ['order_id'=> $order->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-primary mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>
            </button>
          </form>
          
          
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