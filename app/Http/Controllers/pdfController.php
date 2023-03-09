<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vidio;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
    public function cetak_pdf()
    {
        $vidio = vidio::all();

        $pdf = pdf::loadView('admin.pdf', compact('vidio'));
        return $pdf->download('laporan.pdf');
    }
}
