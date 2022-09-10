<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Provinsi;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }

    public function login()
    {
        return view('Frontend.login');
    }

    public function regis()
    {
        return view('Frontend.registrasi');
    }

    public function editbiodata($id)
    {
        $data = Vendor::findOrFail($id);
        $provinsi = Provinsi::all()->sortBy('namaprovinsi');
        return view('Frontend.data',compact('data','provinsi'));
    }

    public function dokumen($id)
    {
        $data = Vendor::findOrFail($id);
        return view('Frontend.dokumen',compact('data'));
    }
}
