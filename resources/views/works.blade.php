<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="my-3 text-centr">Работы:</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Клиент</th>
                    <th>Номер заказа</th>
                    <th>Счет</th>
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
                @foreach($works as $work)
                <tr>
                    <td>{{ $work->order->customer->name }}</td>
                    <td>{{ $work->order->number_customer }}</td>
                    <td>{{ $work->order->invoice }}</td>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>