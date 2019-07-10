<?php

namespace App\Imports;

use App\Electiva;
use Maatwebsite\Excel\Concerns\ToModel;

class ElectivasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Electiva([
            'codigo' => $row[0],
            'nombre' => $row[1],
            'cupo' => $row[2],
        ]);
    }
}
