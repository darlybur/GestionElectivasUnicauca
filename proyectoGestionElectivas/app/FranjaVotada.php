<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FranjaVotada extends Model
{
    protected $table = 'franjavotada';
    protected $fillable = ['CODIGOELECTIVA','CORREOUSUARIO','NUMEROFRANJA'];
    public $timestamps = false;
    protected $primaryKey = 'IDFRANJA';
}
