@extends('layouts.master')

@section('title','Работы')

@section('nav')
    @parent
    <a href="{{route ('order_create')}}">
      <button class="btn btn-primary mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
      </button>
    </a>
@endsection('nav')

@section('content')
<div class="container mt-3">

  <div class="row">

    @foreach($orders as $order) 
      
      <div class="col-3 border">

        <div class="row">

          <div class="col-10">

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
            
          </div>

          <div class="col-2">

            <!-- <div class="container text-end mb-3"> -->
              
                <button type="submit" class="btn btn-primary mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                  </svg>
                </button>

                <button type="submit" class="btn btn-primary mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                  </svg>
                </button>

              <a href="{{ route ('order.show', ['order_id' => $order->id]) }}">
                  <button class="btn btn-primary mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </button>
              </a>

              <form action="{{ route('order.destroy', ['order_id'=> $order->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                </button>
              </form>
              
            <!-- </div> -->

          </div>

        </div>

      </div>

      <div class="col-9 border">
          <!-- Подтаблица работы -->
          <table class="table table-sm">

            <caption>Общая площадь: </caption>

            <thead>
                <tr>
                    <th scope="col">Материал</th>
                    <th scope="col">Размеры, Кол-во</th>
                    <!-- <th scope="col">В</th> -->
                    <!-- <th scope="col">Кол-во</th> -->
                    <th scope="col">Цвет</th>
                    <!-- <th scope="col">Цвет 2</th> -->
                    <th scope="col">Прим.</th>
                </tr>
            </thead>

            <tbody>
                @foreach($order->works as $work)
                <tr>
                    <td>{{ $work->material->name }}</td>
                    <td>
                      <strong> {{ $work->size_1 }} </strong> мм х 
                      <strong> {{ $work->size_2 }} </strong> мм х 
                      <strong> {{ $work->quantity }} </strong> шт
                    </td>
                    <!-- <td>{{ $work->size_2 }}</td> -->
                    <!-- <td>{{ $work->quantity }}</td> -->
                    <td>
                      <u> <em> {{ $work->foil->article }} </em> </u> / 
                      <u> <em> {{ $work->foil_view->article }} </em> </u>
                    </td>
                    <!-- <td>{{ $work->foil_view->article }}</td> -->
                    <td>{{ $work->note }}</td>
                </tr>
                @endforeach
            </tbody>

          </table>

      </div>

    @endforeach
      
  </div>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection