<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $fillable = [
        'namaprovinsi',
    ];

    public function vendors()
    {
        return $this->hasOne('App\Models\Vendor', 'idprovinsi');
    }

    public function lelang()
    {
        return $this->hasOne('App\Models\Lelang', 'idprovinsi');
    }

}
