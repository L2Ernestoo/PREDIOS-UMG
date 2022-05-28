<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $table = 'providers';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre', 'direccion', 'correo', 'numero', 'mercaderia'
    ];

    protected $primaryKey='id';
}
