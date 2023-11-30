<?php

namespace App\Exports;

use App\Models\Cast;
use Maatwebsite\Excel\Concerns\FromCollection;

class CastExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cast::all();
    }
}
