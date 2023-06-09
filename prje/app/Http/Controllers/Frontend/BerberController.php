<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\berber_blog;
use App\Models\berber_detay;
use App\Models\User;
use Illuminate\Http\Request;

class BerberController extends Controller
{
    public function index()
    {
        $veri['berber']=User::where('role','berber')->orderBy('id')->paginate(6);
        return view('frontend.Berber.berber')->with(compact('veri'));
    }
    public function detail($id)
    {
        $prof['prof']=berber_detay::find(intval($id));
        $blogs['blogs']=berber_blog::where('blog_creator_id',$id)->orderBy('id')->paginate(6);
        return view('frontend.Berber.berberDetail')->with(compact('prof','blogs'));
    }
}
