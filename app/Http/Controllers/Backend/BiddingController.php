<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiddingController extends Controller
{
    public function index()
    {
        return view('Backend.admin.bidding.index');
    }
}
