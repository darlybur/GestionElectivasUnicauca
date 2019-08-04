<?php

namespace App\ExportsU;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;

class EstudiantesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usuario::all();
    }
}