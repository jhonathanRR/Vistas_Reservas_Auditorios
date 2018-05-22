<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    // atributos
    protected $fillable =[        
        'name','dateInit', 'dateEnd','observation', 'event_id',
    ];

    public function evento()
    {
        return $this->belongsTo('App\Event');
    }
    
    public $timestamps=true;
}
