<?php

namespace App\Http\Controllers;

Use App\Usuario;

Use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function viewHome()
  {
    $usuario = new Usuario();
    $listaUsuarios = $usuario -> all();
    // dd($listaUsuarios);

    return view('home',["listaUsuarios"=>$listaUsuarios]);
  }
  public function viewCidades()
  {
    $cidades = new Cidade();
    $listaCidades = $cidades -> all();

    return view ('cidades',['listaCidades'=>$listaCidades]);

  }

  public function request(Request $request,$id)
  {
    dd($id);
  }

  public function ExibirFormulário()
  {
    return view('formulario');
  }

  public function CadastrarFormulário(Request $request)
  {
    dd($request);
  }
}

 ?>
