<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Página - Cidade</h1>
    @foreach ($listaCidades as $cidade)
    <p>Nome - Cidade</p>
    <h2>{{$cidade->nome}}</h2>
    <p>População</p>
    <h2>{{$cidade->populacao}}</h2>



    @endforeach
  </body>
</html>
