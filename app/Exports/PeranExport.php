<?php

namespace App\Exports;

use App\Models\Peran;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Peran::all();
        return Peran::select('nama')->get();
    }

    public function headings(): array
    {
        return [
            'nama',
        ];
    }
}
