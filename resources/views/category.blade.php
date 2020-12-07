<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .card {
            margin-bottom: 50px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .product_image img {
            height: 18vw;
            width: 18vw;
            display: block;
        }

        .product_name p {
            font-size: 2.5em;
            margin-top: 4px;
        }

        #categories li {
            list-style-type: none;
        }
    </style>
</head>
<body>
@include('header')
<div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$category->image_url}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <a href="{{ url('/products/'. $category->id) }}" class="btn btn-primary">View products</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
