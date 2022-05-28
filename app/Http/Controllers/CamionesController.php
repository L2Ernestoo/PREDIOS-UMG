<?php

namespace App\Http\Controllers;

use App\Models\Camiones;
use Illuminate\Http\Request;

class CamionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $camiones = Camiones::all();

        return view('camiones.index', compact('camiones'));
    }

    public function create(){
        return view('camiones.crear');
    }

    public function store(Request $request){
        $camion = new Camiones;
        $camion->marca = $request->marca;
        $camion->linea = $request->linea;
        $camion->modelo = $request->modelo;
        $camion->placa = $request->placa;
        $camion->save();

        return redirect()->route('index.camiones');
    }
    //
}
