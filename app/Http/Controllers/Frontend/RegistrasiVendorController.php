<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Vendor;
use App\Models\Dokumen;

class RegistrasiVendorController extends Controller
{
    public function store(Request $request)
    {
        $messages = [
            'namaperusahaan.required'=> 'Nama Perusahaan Mohon diisi',
            'nik.unique' => 'NIK KTP ini Sudah digunakan',
        ];

        $this->validate($request, [
            'namaperusahaan' => 'required',
            'nik' => 'required|numeric|unique:vendor,nik',
        ], $messages);

        $save = Vendor::create([
            'kodevendor'=> '', 
            'namavendor'=> $request->namaperusahaan, 
            'alamatvendor'=> '',
            'kab'=> '',
            'idprovinsi'=> 1,
            'kodepos'=> '',
            'nomortelepon'=> '',
            'email'=> '',
            'npwp'=> '',
            'nik'=> $request->nik,
        ]);

        if($save){
            $id = $save->id;
            return redirect()->route('frontend.edit', compact('id'))->with([
                'toast_success' => 'Mohon isi data perusahaan!'
            ]);
        }else{
            return redirect()->back()->withInput()->with([
                'toast_error' => 'NIK KTP ini Sudah digunakan!'
            ]);
        }
    }

    public function updatedata(Request $request, $id)
    {
        $messages = [
            'alamat.required'=> 'Alamat Mohon diisi',
            'kab.required'=> 'Kab/ Kota Mohon diisi',
            'provinsi.required'=> 'Provinsi Mohon diisi',
            'kodepos.required'=> 'Kodepos Mohon diisi',
            'notelp.required'=> 'No telepon Mohon diisi',
            'email.required'=> 'Email Mohon diisi',
            'npwp.required'=> 'NPWP Mohon diisi',
            'npwp.unique' => 'NPWP ini Sudah digunakan',
        ];

        $this->validate($request, [
            'alamat' => 'required',
            'kab' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'npwp' => 'required|numeric|unique:vendor,npwp',
        ], $messages);

        $update = Vendor::find($id)->update([
            'kodevendor'=> '', 
            'alamatvendor'=> $request->alamat,
            'kab'=> $request->kab,
            'idprovinsi'=> $request->provinsi,
            'kodepos'=> $request->kodepos,
            'nomortelepon'=> $request->notelp,
            'email'=> $request->email,
            'npwp'=> $request->npwp,
        ]);


        if($update){
            $id = Vendor::findOrFail($id);
            return redirect()->route('frontend.dokumen', compact('id'))->with([
                'toast_success' => 'Mohon isi Dokumen Perusahaan!'
            ]);
        }else{
            return redirect()->back()->withInput()->with([
                'toast_error' => 'Gagal simpan data!'
            ]);
        }
    }

    public function uploaddokumen(Request $request)
    {
        $messages = [
            'npwp.required'=> 'NPWP harus diisi',
            'aktausaha.required'=> 'Akta Usaha harus diisi',
            'dokumenindukusaha.required'=> 'Dokumen Induk Usaha harus diisi',
            'suratpernyataan.required'=> 'Surat Pernyataan harus diisi',
            'suratpendaftaran.required'=> 'Surat Pendaftaran harus diisi',
            'fotoworkshop.required'=> 'Foto Workshop Pernyataan harus diisi',

            'npwp.mimes'=> 'NPWP Harus PDF',
            'npwp.max'=> 'Ukuran dokumen NPWP lebih besar',

            'aktausaha.mimes'=> 'Akta Usaha Harus PDF',
            'aktausaha.max'=> ' Ukuran dokumen lebih besar',

            'dokumenindukusaha.mimes'=> 'Dokumen Induk Usaha harus PDF',
            'dokumenindukusaha.max'=> 'Ukuran Dokumen Induk Usaha lebih besar',

            'suratpernyataan.mimes'=> 'Surat Pernyataan Harus PDF',
            'suratpernyataan.max'=> 'Ukuran Surat Pernyataan lebih besar',

            'suratpendaftaran.mimes'=> 'Surat Pendaftaran Harus PDF',
            'suratpendaftaran.max'=> 'Ukuran Surat Pendaftaran lebih besar',

            'fotoworkshop.mimes'=> 'Format Workshop Harus JPG/PNG',
            'fotoworkshop.max'=> 'Ukuran Foto Workshop lebih besar',

        ];

        $this->validate($request, [
            'npwp' => 'required|mimes:pdf|max:2048',
            'aktausaha' => 'required|mimes:pdf|max:2048',
            'dokumenindukusaha' => 'required|mimes:pdf|max:2048',
            'fotoworkshop' => 'required|mimes:jpg,png,jpeg|max:2048',
            'suratpernyataan' => 'required|mimes:pdf|max:2048',
            'suratpendaftaran' => 'required|mimes:pdf|max:2048',
            'idvendor' => 'required',
        ],$messages);


        $npwp = 'N' . time() . '.' . $request->npwp->getClientOriginalExtension();
        $request->npwp->move(public_path('dokumen/npwp'), $npwp);

        $akta = 'A' . time() . '.' . $request->aktausaha->getClientOriginalExtension();
        $request->aktausaha->move(public_path('dokumen/aktausaha'), $akta);

        $dokIndukUsaha = 'D' . time() . '.' . $request->dokumenindukusaha->getClientOriginalExtension();
        $request->dokumenindukusaha->move(public_path('dokumen/dokumenindukusaha'), $dokIndukUsaha);

        $workshop = 'W' . time() . '.' . $request->fotoworkshop->getClientOriginalExtension();
        $request->fotoworkshop->move(public_path('dokumen/workshop'), $workshop);

        $pernyataan = 'PR' . time() . '.' . $request->suratpernyataan->getClientOriginalExtension();
        $request->suratpernyataan->move(public_path('dokumen/suratpernyataan'), $pernyataan);

        $pendaftaran = 'PD' . time() . '.' . $request->suratpendaftaran->getClientOriginalExtension();
        $request->suratpendaftaran->move(public_path('dokumen/suratpendaftaran'), $pendaftaran);


        $dokumen = Dokumen::create(
            [
                'npwp' => $npwp,
                'aktausaha' => $akta,
                'dokumenindukusaha' => $dokIndukUsaha,
                'workshop' => $workshop,
                'suratpernyataan' => $pernyataan,
                'suratpendaftaran' => $pendaftaran,
                'idvendor' => $request->idvendor,
            ]
        );

        if ($dokumen) {
            return redirect()->route('frontend.login')->with([
                'toast_success' => 'Data sudah diterima,Tunggu Verifikasi dari admin!'
            ]);
        } else {
            return redirect()->back()->withInput()->with([
                'toast_error' => 'Gagal Upload Dokumen!'
            ]);
        }
    }

}
