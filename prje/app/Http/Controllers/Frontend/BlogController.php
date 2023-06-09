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

   public function detail($slug)
   {
       $blogList['list']=berber_blog::orderBy('blog_must','DESC')->paginate(9);
       $blog=berber_blog::where('blog_slug',$slug)->first();
       return view('frontend.blog.detail',compact('blog','blogList'));
   }
}
