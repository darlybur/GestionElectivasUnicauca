<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electiva extends Model
{
    protected $table = 'electiva';
    protected $fillable = ['codigo','nombre','cupo'];
    public $timestamps = false;
    protected $primaryKey = 'codigo';
}
