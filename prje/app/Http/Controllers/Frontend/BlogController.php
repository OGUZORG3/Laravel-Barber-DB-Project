<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\berber_blog;
use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
   public function index()
   {
       $data['blog']=berber_blog::orderBy('created_at','DESC')->paginate(3);
       return view('frontend.blog.index',compact('data'));
   }

   public function detail($id)
   {
       $tıklanma=berber_blog::where('id',$id)->pluck('tiklanma_sayisi');
       if ($tıklanma)
       {
            $tıklanma = $tıklanma->sum() +1;
            berber_blog::where('id',$id)->update(
                ["tiklanma_sayisi" => $tıklanma]
            );

       }
       $blogList['list']=berber_blog::orderBy('id')->paginate(9);
       $blog=berber_blog::where('id',$id)->first();
       return view('frontend.blog.detail',compact('blog','blogList'));
   }
}
