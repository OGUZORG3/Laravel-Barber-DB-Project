<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Blogs;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class DefaultController extends Controller
{
    public function index()
    {
        $data['blog'] = Blogs::all()->sortby('blog_must');
        $data['slider'] = Sliders::all()->sortby('slider_must');
        $data['packages']= Packages::all()->sortby('id');
        return view('frontend.default.index', compact('data'));
    }

    public function contact()
    {
        return view('frontend.default.contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

            $data=[
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ];

            Mail::to('laravel@emrahyuksel.com.tr')->send(new SendMail($data));

            return back()->with('success',"Mail Başarıyla Gönderildi");
    }
}
