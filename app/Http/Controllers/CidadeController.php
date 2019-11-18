<?php

namespace App\Http\Controllers;

Use App\Cidade;

Use Illuminate\Http\Request;

class CidadeController extends Controller
{
  public function viewCidades()
  {
    $cidade = new Cidade();
    $listaCidades = $cidade->all();

    return view ('cidade',['listaCidades'=>$listaCidades]);

  }
}
