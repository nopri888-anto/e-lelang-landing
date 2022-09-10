<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $table = 'lelang';
    protected $fillable = [
        'kodelelang',
        'namalelang',
        'tanggallelang',
        'tanggalmulailelang',
        'tanggalselesailelang',
        'satuankerja',
        'lokasilelang',
        'kab',
        'idprovinsi',
        'nilaipagu',
        'nilaihps',
        'statuslelang',
        'jeniskontrak',
    ];

    public function province()
    {
        return $this->belongsTo('App\Models\Provinsi', 'idprovinsi');
    }
}
