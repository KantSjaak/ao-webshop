<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .mb-3 img {
            max-width: 400px;
            max-height: 400px;
        }
    </style>
</head>
<body>
@include('header')
<div class="w-75 bg-light text-dark mx-auto">
    @foreach($products as $product)
        <h2 class="text-center">{{$product->name}}</h2>
        <div class="container">
            <div class="row mb-3">
                <img class="w-25 h-25 d-inline-block" src="{{$product->image_url}}" alt="Card image cap">
                @if ($product->description !== null)
                    <h5 class="text-break font-weight-normal ml-3">{{$product->description}}</h5>
                @else
                    <p>We weren't able to get product description</p>
                @endif
            </div>
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-text">&euro;{{$product->price}}</h4>
                        <a href="{{ action('CartController@setCookies')}}" class="btn btn-primary bg-success">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
