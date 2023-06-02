<?php

namespace App\Http\Controllers\BerberBackend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class BblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blog'] = Blogs::all()->sortBy('blog_must');
     

        return view('berberbackend.blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        $blogs=Blogs::where('id',$id)->first();

        return view('berberbackend.blogs.edit')->with('blogs',$blogs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (strlen($request->blog_slug)>3)
        {
            $slug=Str::slug($request->blog_slug);
        } else {
            $slug=Str::slug($request->blog_title);
        }
  
  
        if ($request->hasFile('blog_file'))
         {
            $request->validate([
                'blog_title' => 'required',
                'blog_content' => 'required',
                'blog_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
  
            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move(public_path('../images/blogs'),$file_name);
  
  
            $blog=Blogs::where('id',$id)->update(
              [
                  "blog_title" => $request->blog_title,
                  "blog_slug" => $slug, //işlem
                  "blog_file" => $file_name,//İşlem
                  "blog_content" => $request->blog_content,
                  "blog_status" => $request->blog_status,
              ]
          );
          
          $path='../images/blogs/'.$request->old_file;
          if (file_exists($path))
          {
              @unlink(public_path($path));
          }
  
  
  
  
          } else {
            $blog=Blogs::where('id',$id)->update(
              [
                  "blog_title" => $request->blog_title,
                  "blog_slug" => $slug, //işlem
                  "blog_content" => $request->blog_content,
                  "blog_status" => $request->blog_status,
              ]
          );   
          }
  
  
  
  
        
        
  
      if ($blog)
      {
          return redirect(route('berber.blog'))->with('success','İşlem Başarılı');
      }
      return back()->with('error','İşlem Başarısız');
  
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
