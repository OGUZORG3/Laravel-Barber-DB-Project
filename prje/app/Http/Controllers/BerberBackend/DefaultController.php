<?php

namespace App\Http\Controllers\BerberBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        return view('berberbackend.default.index');

    }

   public function login()
   {
    return view('berberbackend.default.index');
   }

   public function logout()
   {
   
    return redirect(route('admin.Login'))->with('success','Güvenli Çıkış Yapıldı');
   }

}
