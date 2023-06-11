<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;

class PaketController extends Controller
{
    public function index()
    {
        $paket['packages']=Packages::all();
        return view('frontend.paket.paket')->with(compact('paket'));
    }
}
