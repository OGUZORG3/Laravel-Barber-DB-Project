<?php

namespace App\Http\Controllers\BerberBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


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
   public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|Min:6'
        ]);


        if ($request->hasFile('user_file')) {
            $request->validate([
                'user_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->user_file->getClientOriginalExtension();
            $request->user_file->move(public_path('../images/users'), $file_name);
        } else {
            $file_name = null;
        }


        $user = User::insert(
            [
                "name" => $request->name,
                "email" => $request->email,
                "user_file" => $file_name,//İşlem
                "password" => Hash::make($request->password),
                "user_status" => $request->user_status,
            ]
        );

        if ($user) {
            return redirect(route('berber.login'))->with('success', 'İşlem Başarılı');
        }
        return back()->with('error', 'İşlem Başarısız');
    }

}
