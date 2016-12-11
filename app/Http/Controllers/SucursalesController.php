<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Sucursal\StoreSucursalRequest;
use App\Sucursal;
use App\User;
use Storage;
use File;
use Image;


class SucursalesController extends Controller
{
    public function index()
    {
        $negocio = \Auth::user()->negocio;
        $sucursales = Sucursal::where('negocio_id',"=",$negocio->id)->paginate(10);
        return view('negocio.sucursales.index', compact('sucursales','negocio'));
    }

    public function create()
    {
        return view('negocio.sucursales.create' , compact('listaUsuarios'));
    }

    public function store(StoreSucursalRequest $request)
    {
        //Referencia del logo
        $fotoInput = $request->file('foto');
        //imagen real
        $fotoFile = File::get($fotoInput);
        //Nombre unico
        $fotoNombre = time().'.'.$fotoInput->getClientOriginalExtension();
        //ruta del disk-Storage
        $diskFotoSucursales = storage_path("app/public/fotosucursales/$fotoNombre");
        //Edicion de la imagen a 200x200 y se guardo en el disk
        $foto = Image::make($fotoFile)->resize(500, 200);
        $foto->save($diskFotoSucursales);
        //Guardo y redirecciono
        $sucursal = new Sucursal($request->all()) ;
        $sucursal->foto = $fotoNombre;
        $sucursal->negocio_id = \Auth::user()->negocio->id;
        $sucursal->save();
        return redirect()->route('sucursales.index');
    }

    public function show($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return view('negocio.sucursales.show', compact('sucursal'));
    }

    public function edit($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $listaUsuarios = User::where('rol_id','=', 3)->pluck('name','id');
        return view('negocio.sucursales.edit', compact('sucursal','listaUsuarios'));

    }

    public function update(Request $request, $id)
    {
        $sucursal = Sucursal::findOrFail($id)->fill($request->all());

        if ($request->hasFile('foto')) {
            //Referencia del logo
            $fotoInput = $request->file('foto');
            //imagen real
            $fotoFile = File::get($fotoInput);
            //Nombre unico
            $fotoNombre = time().'.'.$fotoInput->getClientOriginalExtension();

            //ruta del disk-Storage
            $diskFotoSucursales = storage_path("app/public/fotosucursales/$fotoNombre");
            //Edicion de la imagen a 200x200 y se guardo en el disk
            $foto = Image::make($fotoFile)->resize(500, 200);
            $foto->save($diskFotoSucursales);
            //Elimino la imagen vieja
            Storage::disk('fotosucursales')->delete($sucursal['original']['foto']);
            $sucursal->foto = $fotoNombre;
        }
        $sucursal->update();

        return redirect()->route('sucursales.index');
    }

    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();
        Storage::disk('fotosucursales')->delete($sucursal->foto);
        return redirect()->route('sucursales.index');
    }
}
