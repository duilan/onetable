<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Rol\StoreUpdateRolRequest;
use App\Rol;

class RolesController extends Controller
{

  public function index()
  {
    $roles = Rol::paginate(10);
    return view('admin.roles.index',compact('roles'));
  }

  public function create()
  {
    return view('admin.roles.create');
  }

  public function store(StoreUpdateRolRequest $request)
  {
    Rol::create($request->all());
    return redirect()->route('roles.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $rol = Rol::findOrFail($id);
    return view('admin.roles.edit', compact('rol'));
  }

  public function update(StoreUpdateRolRequest $request, $id)
  {
    $rol = Rol::findOrFail($id)->update($request->all());
    return redirect()->route('roles.index');
  }

  public function destroy($id)
  {
    $rol = Rol::findOrFail($id)->delete();
    return redirect()->route('roles.index');
  }

}
