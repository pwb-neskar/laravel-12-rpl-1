<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use PDF;


class ExportPdfController extends Controller
{
    //
    public function exportPdfFilm(Film $film)
    {
        $pdf = PDF::loadView('export.film',compact('film'));
        return $pdf->download('test.pdf');
    }
}
