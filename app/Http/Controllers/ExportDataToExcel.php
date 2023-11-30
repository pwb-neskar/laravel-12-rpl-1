<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PeranExport;
use App\Exports\CastExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportDataToExcel extends Controller
{
    //
    public function exportPeran()
    {
        return Excel::download(new PeranExport, 'peran.xlsx');
    }

    public function exportCast()
    {
        return Excel::download(new CastExport, 'cast.xlsx');
    }
}
