@extends('layouts.master')

@section('title','Добавить Пленку')

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
    <form action="{{route('foil_store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="brand-select">Марка:</label>
            <select name="brand_id" id="brand-select">
                @foreach($brands as $brand)
                    <option value={{ $brand->id }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="foil-article">Артикул</label>
            <input name="article" id="foil-article" class="form-control">
        </div>

        <div class="form-group">
            <label for="foil-name">Наименование</label>
            <input name="name" id="foil-name" class="form-control">
        </div>

        <div class="form-group">
            <label for="foil-price">Цена</label>
            <input name="price" id="foil-price" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection

@section('footerScripts')
    @parent
@endsection