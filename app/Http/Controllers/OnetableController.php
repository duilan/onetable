<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Negocio;

class OnetableController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $negocios = Negocio::all();
    return view('onetable.dashboard', array('negocios' => $negocios));
  }
}
