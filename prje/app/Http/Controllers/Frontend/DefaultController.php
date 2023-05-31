<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
      //  $data['message'] = messages::all()->sortby('id');
        $data['slider'] = Sliders::all()->sortby('slider_must');
        return view('frontend.default.index', compact('data'));
    }

    public function contact()
    {
        return view('frontend.default.contact');
    }

   
    
}
