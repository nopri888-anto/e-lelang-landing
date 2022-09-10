<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = [
        'npwp', 
        'aktausaha', 
        'dokumenindukusaha',
        'workshop',
        'suratpernyataan',
        'suratpendaftaran',
        'idvendor',
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor', 'idvendor');
    }
}
