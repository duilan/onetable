<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumoTipo;

class InsumoTiposController extends Controller
{
    public function index()
    {
        $negocio_id = \Auth::user()->negocio->id;
        $insumoTipos = InsumoTipo::where('negocio_id',"=",$negocio_id)->paginate(10);

        return view('negocio.insumoTipos.index', compact('insumoTipos'));
    }


    public function create()
    {
        return view('negocio.insumoTipos.create');
    }

    public function store(Request $request)
    {
        $negocio_id = \Auth::user()->negocio->id;
        $request->merge( ['negocio_id' => $negocio_id ]);

        InsumoTipo::create($request->all());
        return redirect()->route('insumoTipos.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $insumoTipo = InsumoTipo::findOrFail($id);
        return view('negocio.insumoTipos.edit', compact('insumoTipo'));
    }

    public function update(Request $request, $id)
    {
        $insumoTipo = InsumoTipo::findOrFail($id)->update($request->all());
        return redirect()->route('insumoTipos.index');
    }

    public function destroy($id)
    {
        InsumoTipo::findOrFail($id)->delete();
        return redirect()->route('insumoTipos.index');
    }
}
