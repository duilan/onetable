<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insumo;
use App\InsumoTipo;
use Storage;
use File;
use Image;


class InsumosController extends Controller
{

    public function index()
    {
        $negocio = \Auth::user()->negocio;
        $insumos = Insumo::where('negocio_id','=', $negocio->id)->paginate(10);
        return view('negocio.insumos.index' , compact('insumos'));
    }

    public function create()
    {
        $negocio = \Auth::user()->negocio;
        $listaInsumoTipos = InsumoTipo::where('negocio_id','=', $negocio->id)->pluck('nombre','id');
        return view('negocio.insumos.create', compact('listaInsumoTipos'));
    }

    public function store(Request $request)
    {
        //Referencia del logo
        $fotoInput = $request->file('foto');
        //imagen real
        $fotoFile = File::get($fotoInput);
        //Nombre unico
        $fotoNombre = time().'.'.$fotoInput->getClientOriginalExtension();
        //ruta del disk-Storage
        $diskFotoInsumos = storage_path("app/public/fotoinsumos/$fotoNombre");
        //Edicion de la imagen a 200x200 y se guardo en el disk
        $foto = Image::make($fotoFile)->resize(250, 250);
        $foto->save($diskFotoInsumos);
        //Guardo y redirecciono
        $insumo = new Insumo($request->all()) ;
        $insumo->foto = $fotoNombre;
        $insumo->negocio_id = \Auth::user()->negocio->id;
        $insumo->save();
        return redirect()->route('insumos.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $insumo = Insumo::findOrFail($id);
        $negocio = \Auth::user()->negocio;
        $listaInsumoTipos = InsumoTipo::where('negocio_id','=', $negocio->id)->pluck('nombre','id');
        return view('negocio.insumos.edit', compact('insumo','listaInsumoTipos'));
    }

    public function update(Request $request, $id)
    {
        $insumo = Insumo::findOrFail($id)->fill($request->all());

        if ($request->hasFile('foto')) {
            //Referencia del logo
            $fotoInput = $request->file('foto');
            //imagen real
            $fotoFile = File::get($fotoInput);
            //Nombre unico
            $fotoNombre = time().'.'.$fotoInput->getClientOriginalExtension();

            //ruta del disk-Storage
            $diskFotoInsumos = storage_path("app/public/fotoinsumos/$fotoNombre");
            //Edicion de la imagen a 200x200 y se guardo en el disk
            $foto = Image::make($fotoFile)->resize(250, 250);
            $foto->save($diskFotoInsumos);
            //Elimino la imagen vieja
            Storage::disk('fotosucursales')->delete($insumo['original']['foto']);
            $insumo->foto = $fotoNombre;
        }
        $insumo->update();

        return redirect()->route('insumos.index');
    }

    public function destroy($id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->delete();
        return redirect()->route('insumos.index');
    }
}
