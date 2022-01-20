@extends('layouts.master')

@section('title','Добавить работу')

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
    <form action="{{route('work_store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="order-id">id:</label>
            <input name="order_id" readonly value={{ $order }} id="order-id" class="form-control">
        </div>


    </form>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection