<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'USUARIO';
    protected $fillable = ['CORREOUSUARIO','CONTRASENIA','ROL'];
    public $timestamps = false;
    protected $primaryKey = 'CORREOUSUARIO';
}
