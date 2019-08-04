<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    public $timestamps = false;
    protected $fillable = ['NUMEROSALON', 'DESCRIPCIONSALON'];
}
