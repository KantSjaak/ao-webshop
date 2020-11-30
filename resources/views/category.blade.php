<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>
</head>
<body>
    <div id="header">
        <h1>Category Page</h1>
    </div>
    <div id="content">
        <p> We hebben de volgende categorieën:</p>
        @foreach($categories as $categorie)
        <ul>
            <li>Naam: {{$categorie->name}}</li>
            <li>Gemaakt op: {{$categorie->created_at}}</li>
        </ul>
        @endforeach
    </div>
</body>
</html>
