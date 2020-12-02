<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
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
    <div id="header">
        <h1>Category Page</h1>
    </div>
    <div id="content">
        <p> We hebben de volgende categorieën:</p>
        <div id="categories">
            @foreach($categories as $category)
                <ul>
                    <li class="product_image"><img src="{{$category->image_url}}" alt="{{$category->name}}"></li>
                    <li class="product_name"><p>{{$category->name}}</p></li>
                </ul>
            @endforeach
        </div>
    </div>
</body>
</html>
