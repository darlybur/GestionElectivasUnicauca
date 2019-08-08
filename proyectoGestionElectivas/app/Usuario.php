<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'USUARIO';
    protected $fillable = ['email','password','ROL'];
    public $timestamps = false;
    protected $primaryKey = 'email';

}
