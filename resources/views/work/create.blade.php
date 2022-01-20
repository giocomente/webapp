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
            <input name="order_id" readonly value={{ $order_id }} id="order-id" class="form-control">
        </div>

        <div class="form-group">
            <label for="material_id-select">Материал:</label>
            <select name="material_id" id="material_id-select" class="form-select" aria-label="Default select example">
                <option value={{ null }}>
                        - - -
                </option>
                @foreach($materials as $material)
                    <option value={{ $material->id }}>
                        {{ $material->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="size-1">Ширина:</label>
            <input name="size_1" id="size-1" class="form-control">
        </div>

        <div class="form-group">
            <label for="size-2">Высота:</label>
            <input name="size_2" id="size-2" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantity">Количество:</label>
            <input name="quantity" id="quantity" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="foil_id-select">Цвет 1:</label>
            <select name="foil_id" id="foil_id-select" class="form-select" aria-label="Default select example">
                @foreach($foils as $foil)
                    <option value={{ $foil->id }}>
                        {{ $foil->article }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="foil_view_id-select">Цвет 2:</label>
            <select name="foil_view_id" id="foil_view_id-select" class="form-select" aria-label="Default select example">
                @foreach($foils as $foil)
                    <option value={{ $foil->id }}>
                        {{ $foil->article }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="note">Примечание:</label>
            <input name="note" id="note" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Сохранить">

    </form>
</div>
@endsection

@section('footerScripts')
    @parent
@endsection