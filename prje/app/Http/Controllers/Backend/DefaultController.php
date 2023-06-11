<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\berber_blog;
use App\Models\berber_detay;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
   public function index()
   {
        $berbersayı=berber_detay::all()->count();
        $blogetklesim=berber_blog::all()->sum('tiklanma_sayisi');
        $blogsayi=berber_blog::all()->count();
        $mesaj=Messages::all()->count();
       return view('backend.default.index')->with(compact('berbersayı','blogetklesim','blogsayi','mesaj'));
   }

   public function login()
   {
       return view('backend.default.login');
   }

   public function authenticate(Request $request)
   {
       $request->flash();

       $credentials=$request->only('email','password');
       $remember_me=$request->has('remember_me') ? true : false;

       if (Auth::attempt($credentials,$remember_me))
       {
            return redirect()->intended(route('admin.index'));
       } else {
           return back()->with('error','Hatalı Kullanıcı');
       }


   }

   public function logout()
   {
       Auth::logout();
       return redirect(route('admin.Login'))->with('success','Güvenli Çıkış Yapıldı');
   }

   public function kayit()
   {

       return view('backend.default.kayit');

   }
}
