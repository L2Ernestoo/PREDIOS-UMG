<?php

namespace App\Http\Controllers;

use App\Models\Predios;
use Illuminate\Http\Request;

class PrediosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $predios = Predios::all();
        return view('predios.index', compact('predios'));
    }
}
