<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\UserVendor;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class VendorController extends Controller
{
    public function index()
    {
        $data = Vendor::all();
        return view('Backend.admin.vendor.index', compact('data'));
    }

    public function validasi($id)
    {
        $data = Vendor::findOrFail($id);
        return view('Backend.admin.vendor.validasi', compact('data'));
    }

    public function confirmasiData($id)
    {
        $data = Vendor::findOrFail($id);
        return view('Backend.admin.vendor.confirmasi', compact('data'));
    } 

    public function email(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
            'remark' => '',
            'idvendor' => '',
        ]);

        $email = [
            'title' => 'Akses Login Sistem E-Lelang',
            'username' => $request->username,
            'password' => $request->password,
            'status' => $request->status,
            'remark' => $request->remark,
        ];

        $to = $request->email;

        $save = UserVendor::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'remark' => $request->remark,
            'idvendor' => $request->idvendor,
        ]);

        if ($save) {
            $send = Mail::to($to)->send(new SendEmail($email));
            return redirect()->route('backend.admin.vendor')->with([
                'toast_success' => 'Data dikirim Email!'
            ]);
        } else {
            return redirect()->back()->withInput()->with([
                'toast_error' => 'E-Mail Failed!'
            ]);
        }
    }


    public function downloadDokumenNPWP(Request $request, $npwp)
    {
        return response()->download(public_path('dokumen/npwp/' . $npwp));
    }

    public function downloadDokumenAkta(Request $request, $akta)
    {
        return response()->download(public_path('dokumen/aktausaha/' . $akta));
    }

    public function downloadDokumenIndukUsaha(Request $request, $induk)
    {
        return response()->download(public_path('dokumen/dokumenindukusaha/' . $induk));
    }

    public function downloadSuratPernyataan(Request $request, $pernyataan)
    {
        return response()->download(public_path('dokumen/suratpernyataan/' . $pernyataan));
    }

    public function downloadSuratPendaftaran(Request $request, $pendaftaran)
    {
        return response()->download(public_path('dokumen/suratpendaftaran/' . $pendaftaran));
    }

    public function downloadFotoWorkshop(Request $request, $workshop)
    {
        return response()->download(public_path('dokumen/workshop/' . $workshop));
    }

}
