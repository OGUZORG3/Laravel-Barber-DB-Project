<?php

namespace App\Http\Controllers\BerberBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('berberbackend.settings.index');

    }
}
