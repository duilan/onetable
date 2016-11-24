<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Negocios\StoreNegocioRequest;
use App\Http\Requests\Negocios\UpdateNegocioRequest;
use App\Negocio;
use App\User;
use App\Pais;

class NegociosController extends Controller
{
    public function index()
    {
        $negocios = Negocio::paginate(10);
        return view('admin.negocios.index', compact('negocios'));
    }

    public function create()
    {
        $listaPaises = Pais::pluck('nombre','id');
        //Un negocio solo lo tiene un usuario del tipo negocio

        $listaUsuarios = User::where('rol_id','=', 2)->pluck('name','id');
        return view('admin.negocios.create',compact('listaPaises','listaUsuarios'));
    }

    public function store(StoreNegocioRequest $request)
    {
        Negocio::create($request->all());
        return redirect()->route('negocios.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $negocio = Negocio::findOrFail($id);
        $listaPaises = Pais::pluck('nombre','id');
        //Un negocio solo lo tiene un usuario del tipo negocio
        $listaUsuarios = User::where('rol_id','=', 2)->pluck('name','id');
        return view('admin.negocios.edit',compact('negocio','listaPaises','listaUsuarios'));
    }

    public function update(UpdateNegocioRequest $request, $id)
    {
        Negocio::findOrFail($id)->update($request->all());
        return redirect()->route('negocios.index');
    }

    public function destroy($id)
    {
        Negocio::findOrFail($id)->delete();
        return redirect()->route('negocios.index');
    }
}
