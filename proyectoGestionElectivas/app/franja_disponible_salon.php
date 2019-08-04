<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class franja_disponible_salon extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'IDFRANJA';
    protected $fillable = ['NUMEROFRANJA', 'NUMEROSALON'];
}
