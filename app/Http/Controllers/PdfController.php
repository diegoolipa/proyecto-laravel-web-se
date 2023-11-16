<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function exportarPdfPersonas(){
        $personas = Persona::all();
        $pdf = Pdf::loadView('pdf.pdf-personas',['personas'=>$personas]);
        return $pdf->stream();
    }
}
