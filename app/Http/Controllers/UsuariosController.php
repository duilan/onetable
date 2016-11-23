<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Usuario\StoreUsuarioRequest;
use App\Http\Requests\Usuario\UpdateUsuarioRequest;
use App\User;
use App\Rol;

class UsuariosController extends Controller
{

  public function index()
  {
    $usuarios = User::paginate(10);
    return view('admin.usuarios.index',compact('usuarios'));
  }

  public function create()
  {
    $listaRoles = Rol::pluck('nombre','id');
    return view('admin.usuarios.create', compact('listaRoles'));
  }

  public function store(StoreUsuarioRequest $request)
  {

    User::create($request->all());
    return redirect()->route('usuarios.index');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $usuario = User::findOrFail($id);
    $listaRoles = Rol::pluck('nombre','id');
    return view('admin.usuarios.edit', compact('usuario','listaRoles'));
  }

  public function update(UpdateUsuarioRequest $request, $id)
  {
    if (empty($request->get('password') )) {
      $data = $request->except(['password']);
    }else{
      $data = $request->all();
    }
    User::findOrFail($id)->update($data);
    return redirect()->route('usuarios.index');
  }

  public function destroy($id)
  {
    User::findOrFail($id)->delete();
    return redirect()->route('usuarios.index');
  }
}
