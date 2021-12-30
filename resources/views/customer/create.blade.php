@extends('layouts.master')

@section('title','Добавить Клиента')

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
    <form action="{{route('customer_store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="txtName">Наименование</label>
            <input name="name" id="txtName" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection

@section('footerScripts')
    @parent
@endsection