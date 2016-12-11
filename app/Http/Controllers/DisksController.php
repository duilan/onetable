<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisksController extends Controller
{

    public function logotipos($logo = null)
    {
        $url = storage_path("app/public/logotipos/{$logo}");
        if (file_exists($url)) {
            return \Response::download($url);
        }
    }

    public function fotosucursal($foto = null)
    {
        $url = storage_path("app/public/fotosucursales/{$foto}");
        if (file_exists($url)) {
            return \Response::download($url);
        }
    }

    public function fotoinsumo($foto = null)
    {
        $url = storage_path("app/public/fotoinsumos/{$foto}");
        if (file_exists($url)) {
            return \Response::download($url);
        }
    }

}
