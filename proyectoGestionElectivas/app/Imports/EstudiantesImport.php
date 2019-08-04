<?php

namespace App\ImportsU;

use App\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;

class EstudiantesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usuario([
            'CORREOUSUARIO' => $row[0],
            'CONTRASENIA' => $row[1],
            'ROL' => $row[2],
        ]);
    }
}