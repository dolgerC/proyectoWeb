<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Bien extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'imagen','precio', 'descripcion', 'ubicacion',
    ];

    protected $hidden = [
         'remember_token',
    ];
}