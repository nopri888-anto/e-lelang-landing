<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVendor extends Model
{
    use HasFactory;

    protected $table = 'uservendor';
    protected $fillable = [
        'username',
        'password',
        'remark',
        'status',
        'idvendor',
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Vendor', 'idvendor');
    }
}
