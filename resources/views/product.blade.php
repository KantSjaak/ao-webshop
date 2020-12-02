<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        #categories ul {
            border-bottom: solid black 4px;
        }

        #productGrid {
            display: flex;
            flex-wrap: nowrap;
        }
    </style>
</head>
<body>
<div id="header">
    <h1>Product Page</h1>
</div>
<div id="content">
    <p> We hebben de volgende producten:</p>
    <div id="categories">
        <ul>
        @foreach($products as $product)
                <li>{{$product->name}}</li>
        @endforeach
        </ul>
    </div>
    <div id="productGrid">
        <div class="productRow">

        </div>
    </div>
</div>
</body>
</html>
