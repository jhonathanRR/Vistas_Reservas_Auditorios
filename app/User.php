<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * preguntamos si es un administrador
     */
    public function isAdmin()
    {
        return $this->attributes['rol'] == 'admin';
    }
    /*
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    } 
    */
}
