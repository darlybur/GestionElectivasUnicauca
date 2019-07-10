<?php

namespace App\Exports;

use App\Electiva;
use Maatwebsite\Excel\Concerns\FromCollection;

class ElectivasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Electiva::all();
    }
}
