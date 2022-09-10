<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lelang;
use App\Models\Provinsi;
use Illuminate\Support\Carbon;

class LelangController extends Controller
{
    public function index()
    {
        $data = Lelang::all();
        return view('Backend.admin.lelang.index', compact('data'));
    }

    public function tambahlelang()
    {
        $datetime = Carbon::now()->format('Y-m-d');
        $date = Carbon::now();

        $tender = Lelang::count('kodelelang');
        $formatDate = $date->year;
        if ($tender == 0) {
            $nomor = 10001;
            $kode = 'EL' . $formatDate . $nomor;
        } else {
            $lastTender = TenderModal::all()->last();
            $urut = (int)substr($lastTender->kodeTender, -5) + 1;
            $kode = 'EL' . $formatDate . $urut;
        }

        $provinsi = Provinsi::all()->sortBy('namaprovinsi');
        return view('Backend.admin.lelang.create',compact('provinsi','kode')); 
    }
}
