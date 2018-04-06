<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    // atributos
    protected $fillable =[
        'name',
        'organizador',
        'fechaCreacion',
        'description',
    ];
    
    public $timestamps=true;
}
