<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BitacoraServicios extends Model
{
    use HasFactory;


    public function estatus(){
        return $this->hasOne(EstatusServicio::class, 'id', 'estatus_servicios_id');
    }

    public function predio(){
        return $this->hasOne(Predios::class,'id', 'predios_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }
}
