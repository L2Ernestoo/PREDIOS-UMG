<?php

namespace App\Http\Controllers;

use App\Models\Pilotos;
use Illuminate\Http\Request;

class PilotosController extends Controller
{
    public function crearPiloto(){

        return view('pilotos.crear');
    }

    public function index(){
        $pilotos = Pilotos::all();

        return view('pilotos.index',compact('pilotos'));
    }

    public function storePiloto(Request $request){
        $piloto = new Pilotos;
        $piloto->nombre = $request->nombre;
        $piloto->fecha_nacimiento = $request->fecha_nacimiento;
        $piloto->cui = $request->cui;
        $piloto->save();

        return redirect()->route('ver.pilotos');
    }
}
