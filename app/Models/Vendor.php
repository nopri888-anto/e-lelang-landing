<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendor';

    protected $fillable = [
        'kodevendor', 
        'namavendor', 
        'alamatvendor',
        'kab',
        'idprovinsi',
        'kodepos',
        'nomortelepon',
        'email',
        'npwp',
        'nik',
    ];

    public function province()
    {
        return $this->belongsTo('App\Models\Provinsi', 'idprovinsi');
    }

    public function dokumen()
    {
        return $this->hasOne('App\Models\Dokumen', 'idvendor');
    }

    public function uservendor()
    {
        return $this->hasOne('App\Models\UserVendor', 'idvendor');
    }
}
