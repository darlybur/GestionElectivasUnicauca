<?php

namespace App\Imports;

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
            'email' => $row[0],
            'password' => $row[1],
            'ROL' => $row[2],
        ]);
    }
}