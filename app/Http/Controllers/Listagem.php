<?php

namespace App\Http\Controllers;
use App\Components;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
class Listagem extends Controller
{

  public function index (Components $component){
    $component = new Components;
    $tipo = Components::all('tipo')->unique('tipo');
    return view('parts.parts',compact('tipo'));
  }

  public function listaComponents (Components $component){
    $component = new Components;

    $lista = $component::all()->sortBy('tipo', SORT_NATURAL|SORT_FLAG_CASE);
    return view('main',compact('lista'));
  }

  public function adicionarComponents(Request $request){
    $input = $request->all();
    Components::create($input);
    return redirect('/');
  }

  public function adicionarComponentsView(){
    return view('parts.add');
  }

  public function editarComponents(Components $id){
    return view('parts.editar', compact('id'));
  }

  public function updateComponents(Request $request, Components $id){
    $id->update($request->all());
    return redirect('/');
  }
}
