<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Página Home</h1>
    @foreach ($listaUsuarios as $usuario)
    
    <h2>{{$usuario->nome}}</h2>

    @endforeach

  </body>
</html>
