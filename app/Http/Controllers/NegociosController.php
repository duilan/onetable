<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Negocios\StoreNegocioRequest;
use App\Http\Requests\Negocios\UpdateNegocioRequest;
use App\Negocio;
use App\User;
use App\Pais;
use Storage;
use File;
use Image;

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
        //Referencia del logo
        $logoInput = $request->file('logo');
        //imagen real
        $logoFile = File::get($logoInput);
        //Nombre unico
        $logoNombre = time().'.'.$logoInput->getClientOriginalExtension();
        //ruta del disk-Storage
        $diskLogotipos = storage_path("app/public/logotipos/$logoNombre");
        //Edicion de la imagen a 200x200 y se guardo en el disk
        $logo = Image::make($logoFile)->resize(200, 200);
        $logo->save($diskLogotipos);
        //Guardo y redirecciono
        $negocio = new Negocio($request->all()) ;
        $negocio->logo = $logoNombre;
        $negocio->save();
        return redirect()->route('negocios.index');
    }

    public function show($id)
    {
        $negocio = Negocio::findOrFail($id);
        return view('admin.negocios.show',compact('negocio'));
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
        $negocio = Negocio::findOrFail($id)->fill($request->all());

        if ($request->hasFile('logo')) {
            //Referencia del logo
            $logoInput = $request->file('logo');
            //imagen real
            $logoFile = File::get($logoInput);
            //Nombre unico
            $logoNombre = time().'.'.$logoInput->getClientOriginalExtension();
            //ruta del disk-Storage
            $diskLogotipos = storage_path("app/public/logotipos/$logoNombre");
            //Edicion de la imagen a 200x200 y se guardo en el disk
            $logo = Image::make($logoFile)->resize(200, 200);
            $logo->save($diskLogotipos);
            //Elimino la imagen vieja
            Storage::disk('logotipos')->delete($negocio['original']['logo']);

            $negocio->logo = $logoNombre;
        }

        $negocio->update();

        return redirect()->route('negocios.index');
    }

    public function destroy($id)
    {
        $negocio = Negocio::findOrFail($id);
        $negocio->delete();
        Storage::disk('logotipos')->delete($negocio->logo);        
        return redirect()->route('negocios.index');
    }
}
