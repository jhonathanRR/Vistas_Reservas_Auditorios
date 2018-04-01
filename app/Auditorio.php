<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditorio extends Model
{
        // atributos
        protected $fillable =[
            'name',
            'latitude',
            'longitude',
            'fechaCreacion',
            'description',
        ];
        
        public $timestamps=true;

        public function events()
        {
        return $this->hasMany('App\Event');
        }
    
}
