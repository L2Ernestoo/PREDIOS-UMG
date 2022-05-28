<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
}
