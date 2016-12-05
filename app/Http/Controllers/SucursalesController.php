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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::paginate(10);
        return view('negocio.sucursales.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaUsuarios = User::where('rol_id','=', 3)->pluck('name','id');
        return view('negocio.sucursales.create' , compact('listaUsuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return view('negocio.sucursales.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return view('negocio.sucursales.edit', compact('sucursal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sucursal::findOrFail($id)->delete();
        return redirect()->route('sucursales.index');
    }
}
