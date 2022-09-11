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
            $lastTender = Lelang::all()->last();
            $urut = (int)substr($lastTender->kodelelang, -5) + 1;
            $kode = 'EL' . $formatDate . $urut;
        }

        $provinsi = Provinsi::all()->sortBy('namaprovinsi');
        return view('Backend.admin.lelang.create',compact('provinsi','kode')); 
    }

    public function simpanlelang(Request $request)
    {
        $this->validate($request, [
            'kodelelang' => 'required',
            'namalelang' => 'required',
            'lokasilelang' => 'required',
            'satuankerja' => 'required',
            'kab' => 'required',
            'idprovinsi' => 'required',
            'nilaipagu' => 'required',
            'nilaihps' => 'required',
            'jeniskontrak' => 'required',
            'tanggalmulailelang' => 'required',
            'tanggalselesailelang' => 'required',
        ]);

        $save = Lelang::create([
            'kodelelang'=> $request->kodelelang,  
            'namalelang'=> $request->namalelang, 
            'satuankerja'=> $request->satuankerja,
            'lokasilelang'=> $request->lokasilelang,
            'kab'=> $request->kab,
            'idprovinsi'=> $request->idprovinsi,
            'nilaipagu'=> $request->nilaipagu,
            'nilaihps'=> $request->nilaihps,
            'jeniskontrak'=> $request->jeniskontrak,
            'tanggalmulailelang'=> $request->tanggalmulailelang,
            'tanggalselesailelang'=> $request->tanggalselesailelang,
            'tanggallelang'=> date('d-m-Y'),
            'statuslelang'=> 1,
        ]);

        if($save){
            return redirect()->route('backend.admin.lelang')->with([
                'toast_success' => 'Berhasil Tambah lelang!'
            ]);
        }else{
            return redirect()->back()->withInput()->with([
                'toast_error' => 'Gagal Tambah lelang!'
            ]);
        }

    }
}
