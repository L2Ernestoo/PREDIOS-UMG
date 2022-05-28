<?php

namespace App\Http\Controllers;

use App\Models\BitacoraServicios;
use App\Models\Camiones;
use App\Models\Navieras;
use App\Models\Pilotos;
use App\Models\Predios;
use App\Models\Servicios;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioController extends Controller
{
    public function ingreso(){
        $navieras = Navieras::all();
        $pilotos = Pilotos::all();
        $predios = Predios::all();
        $camiones = Camiones::all();
        return view('servicios.index', compact('navieras','pilotos','predios','camiones'));
    }

    public function despacho(){
        $navieras = Navieras::all();
        $pilotos = Pilotos::all();
        $predios = Predios::all();
        $camiones = Camiones::all();
        $servicios = Servicios::where('estatus_id', 1)->get();
        return view('servicios.despacho', compact('navieras','pilotos','predios','camiones','servicios'));
    }

    public function storeIngreso(Request $request){

        $servicio = new Servicios;
        $servicio->navieras_id = $request->naviera;
        $servicio->pilotos_id = $request->piloto;
        $servicio->predios_id = $request->predio;
        $servicio->camiones_id = $request->camion;
        $servicio->numero_contenedor = $request->numero_contenedor;
        $servicio->placa_chassis = $request->placa_chassis;
        $servicio->estatus_id = 1; //Ingresado
        $servicio->barco = 'EL PERLA NEGRA';
        $servicio->observaciones = $request->observaciones;
        $servicio->users_id = Auth::user()->id;
        $servicio->save();

        $bitacora = new BitacoraServicios;
        $bitacora->servicios_id = $servicio->id;
        $bitacora->estatus_servicios_id = 1;
        $bitacora->predios_id = $request->predio;
        $bitacora->users_id = Auth::user()->id;
        $bitacora->save();

        $servicio = Servicios::with('naviera')->where('id',$servicio->id)->first();

        $view = view('pdf.boleta', compact('servicio'));
        PDF::setOptions(['isRemoteEnabled' => true]);

        return PDF::loadHTML($view)
            ->setPaper('letter')
            ->download('TRANSPORTE-PESADO-'.$servicio->id.'.pdf');

    }

    public function storeDespacho(Request $request){

        $bitacora = new BitacoraServicios;
        $bitacora->servicios_id = $request->numero_servicio;
        $bitacora->estatus_servicios_id = 2;
        $bitacora->predios_id = $request->predio;
        $bitacora->users_id = Auth::user()->id;
        $bitacora->save();

        $servicio = Servicios::with('naviera')->where('id',$request->numero_servicio)->first();
        $servicio->estatus_id = 2;
        $servicio->save();

        $view = view('pdf.boleta', compact('servicio'));
        PDF::setOptions(['isRemoteEnabled' => true]);

        return PDF::loadHTML($view)
            ->setPaper('letter')
            ->download('TRANSPORTE-PESADO-DESPACHADO-'.$servicio->id.'.pdf');

    }

    public function reporte(){
        $servicios = Servicios::with('naviera')->get();

        return view('reportes.index', compact('servicios'));
    }

    public function pdf($id){
        $id = decrypt($id);
        $servicio = Servicios::with('naviera')->where('id',$id)->first();

        $view = view('pdf.boleta', compact('servicio'));
        PDF::setOptions(['isRemoteEnabled' => true]);

        return PDF::loadHTML($view)
            ->setPaper('letter')
            ->stream('TRANSPORTE-PESADO-'.$servicio->id.'.pdf');
    }
}
