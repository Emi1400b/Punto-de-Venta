<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'username',
        'password',
        'id_empleado'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function usuario() {
        return $this->belongsTo('App\Models\Empleado','id_empleado');
    }
}
