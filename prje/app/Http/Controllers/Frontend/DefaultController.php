<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\berber_blog;
use App\Models\ekips;
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
        $data['blog'] = berber_blog::orderBy('blog_must')->paginate(3);
        $data['slider'] = Sliders::all()->sortby('slider_must');
        $paket['packages']= Packages::all()->sortby('id');
        $data['ekip']= ekips::all()->sortby('id');
        return view('frontend.default.index', compact('data','paket'));
    }

    public function contact()
    {
        return view('frontend.default.contact');
    }



}
