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
        $tıklanma=berber_detay::where('user_id',$id)->pluck('berber_prof_tiklanma');
        if ($tıklanma)
        {
            $tıklanma = $tıklanma->sum() +1;
            berber_detay::where('user_id',$id)->update(
                ["berber_prof_tiklanma" => $tıklanma]
            );

        }
        $blogs = berber_detay::where('user_id', $id)
            ->select('id')
            ->first();
        if ($blogs) {
            $idi = $blogs->id;
        }
        $prof['prof']=berber_detay::find(intval($idi));
        $blogs['blogs']=berber_blog::where('blog_creator_id',$idi)->orderBy('id')->paginate(6);
        return view('frontend.Berber.berberDetail')->with(compact('prof','blogs'));
    }
}
