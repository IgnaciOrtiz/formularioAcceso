<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="/registro" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="text" name="apellidos">
        <input type="text" name="edad">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirm">
        <input type="submit" value="GuardarUsuario">
    </form>
</body>
</html>