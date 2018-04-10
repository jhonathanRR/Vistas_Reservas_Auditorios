<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    //
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'organizator','dateInit', 'dateEnd','description', 'auditorio_id',
    ];

    public function owner()
    {
    return $this->belongsTo('App\Auditorio');
    }

    public function validaFechaFinAtributtes ()
    {
        //utilizando carbon
        /**
         * 
         * if (Carbon::parse($this->attributes['dateEnd'])->diffInMinutes() > Carbon::parse($this->attributes['dateInit'])->diffInMinutes()) {
         *   echo("error 404");
         *  }
         */
                

    }
}
