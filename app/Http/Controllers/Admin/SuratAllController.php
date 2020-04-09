<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use PDF;
use App\SuratUndangan;


use Illuminate\Http\Request;

class SuratAllController extends Controller
{
    public function index($id){
        $data['nama_surat'] =  "Surat Acara";
        $data['komponen'] = SuratUndangan::where('id',$id)->first();
        $customPaper = array(0,0,612,936);
        $pdf = PDF::loadview('Surat.suratundangan',$data);
        return $pdf->setPaper($customPaper,'potrait')->stream('Surat.suratundangan');

    }
}
