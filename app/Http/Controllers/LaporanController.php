<?php

namespace App\Http\Controllers;

use App\models\mahasiswa;   
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
   {
        $mahasiswa = mahasiswa::all();
        return view('laporan/mahasiswa',['mahasiswa'=>$mahasiswa]);
   } 

   public function cetak_pdf()
   {
        $mahasiswa = mahasiswa::all();

        $pdf = PDF::loadview('laporan/mahasiswapdf',['mahasiswa'=>$mahasiswa]);
        return $pdf->download('laporan-mahasiswa-pdf');
   }
}
