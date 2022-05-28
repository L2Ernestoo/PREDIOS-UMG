<?php

namespace App\Http\Controllers;

use App\Models\Navieras;
use App\Models\Pilotos;
use App\Models\Predios;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function ingreso(){
        $navieras = Navieras::all();
        $pilotos = Pilotos::all();
        $predios = Predios::all();

        return view('servicios.index', compact('navieras','pilotos','predios'));
    }
}
