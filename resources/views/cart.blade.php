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
    @if(!empty($data))
        <ul class="list-group">
            @foreach($data as $value)
                <li class="list-group-item">
                    <h4>{{$value['name']}}</h4>
                    <h5 class="card-text">Price: &euro;{!! \App\Helper::Multiply($value['price'], $value['amount']) !!}</h5>
                    <h5 class="card-text">Amount: {{$value['amount']}}</h5>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{ url('/cart/0/'. $value['id']) }}" type="button" class="btn btn-outline-danger"><i
                                    class="bi bi-cart-dash"
                                    style="font-size: 1.7rem; color: #dc3545;"></i></a>
                        <a href="{{ url('/cart/1/'. $value['id']) }}" type="button" class="btn btn-outline-success"><i
                                    class="bi bi-cart-plus"
                                    style="font-size: 1.7rem; color: #198754;"></i></a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <h2 class="text-danger text-center">There aren't any products in your shopping cart!</h2>
    @endif
</div>

</body>
</html>