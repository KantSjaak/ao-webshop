<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create User</title>
</head>
<body>
<div id="header">
    <h1>Create Page</h1>
    <p>{{app()->getLocale()}}</p>
</div>
<div id="content">
    <form method="post">
        @csrf
        <ul>
            <li>
                <label for="username">Uw account naam:</label>
                <input type="text" name="username">
            </li>
            <li>
                <label for="mail">Uw Gmail:</label>
                <input type="text" name="mail">
            </li>
            <li>
                <label for="Wachtwoord">Uw Wachtwoord:</label>
                <input type="text" name="Wachtwoord">
            </li>
        </ul>
        <input type="submit">
    </form>
</div>
</body>
</html>
