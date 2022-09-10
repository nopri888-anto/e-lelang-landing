<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function administrator()
    {
        return view('backend.admin.index');
    }

    public function user()
    {
        return view('backend.user.index');
    }

}
