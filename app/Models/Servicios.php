<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    public function naviera(){
        return $this->hasOne(Navieras::class,'id', 'navieras_id');
    }

    public function piloto(){
        return $this->hasOne(Pilotos::class,'id', 'pilotos_id');
    }

    public function predio(){
        return $this->hasOne(Predios::class,'id', 'predios_id');
    }

    public function trailer(){
        return $this->hasOne(Camiones::class,'id', 'camiones_id');
    }
}
