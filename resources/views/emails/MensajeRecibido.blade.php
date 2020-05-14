<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
  </head>

  <body>
    Contenido del email
    {{ $msg ['name']}} - {{ $msg ['last_name']}}

    <h2>{{ $msg ['email'] }}</h2>
    <h3>{{ $msg ['password']}}</h3>
  </body>

</html>