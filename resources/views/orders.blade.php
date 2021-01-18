<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cart</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
@include('header')
<div class="container">
    @if(!empty($orders))
        <ul class="list-group">
            @foreach($orders as $value)
                <li class="list-group-item">
                    <h3>Order: {{$value->id}}</h3>
                    <p class="m-0">Price: &euro;{{$value->total_amount}}, ordered on {{$value->created_at}}.</p>
                </li>
            @endforeach
            @else
                <h2 class="text-danger text-center">You haven't ordered anything yet.</h2>
        </ul>
    @endif
</div>

</body>
</html>