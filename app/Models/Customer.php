<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = 'customer';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre', 'direccion', 'correo', 'numero'
    ];

    protected $primaryKey='id';
}



