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

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
@include('header')
<div class="container">
    {{dd($data)}}
    {{--<div class="row">
         @foreach($products as $product)
             <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="{{$product->image_url}}" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title">{{$product->name}}</h5>
                 </div>
             </div>
         @endforeach
     </div>--}}
</div>

</body>
</html>
