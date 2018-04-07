<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
