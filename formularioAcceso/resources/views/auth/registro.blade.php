<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" type="text/css" rel="stylesheet" >
    <title>Registro</title>
    
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('mensaje'))
        <div class="alert alert-success">
            <p>{{ session('mensaje') }}</p>
        </div>
    @endif
    <section class="form-container">
    <form class="form" action="/registro" method="POST">
        <h4>Formulario Registro Laravel</h4>
        @csrf
        <input class="campos" type="text" name="nombre" placeholder="Nombre">
        <input class="campos"  type="text" name="apellidos" placeholder="Apellidos">
        <input class="campos"  type="text" name="edad" placeholder="Edad">
        <input class="campos"  type="email" name="email" placeholder="Email">
        <input class="campos"  type="password" name="password" placeholder="Constraseña">
        <input class="campos"  type="password" name="password_confirm" placeholder="Repita Contraseña">
        <input class=button type="submit" value="Guardar">
    </form>
    </section>
</body>
</html>