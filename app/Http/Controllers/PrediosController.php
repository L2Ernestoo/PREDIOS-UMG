<?php

namespace App\Http\Controllers;

use App\Models\Predios;
use Illuminate\Http\Request;

class PrediosController extends Controller
{
    public function index(){
        $predios = Predios::all();
        return view('predios.index', compact('predios'));
    }
}
