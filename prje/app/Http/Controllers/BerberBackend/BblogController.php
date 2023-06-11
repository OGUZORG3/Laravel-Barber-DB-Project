<?php

namespace App\Http\Controllers\BerberBackend;

use App\Models\berber_blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berber_detay;

class BblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blog']=berber_blog::where('blog_creator_id',Auth::user()->id)->orderBy('id')->paginate(2);
        return view('berberbackend.blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berberbackend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

          } else {
              $file_name=null;
          }

        $blogs = berber_detay::where('user_id', Auth::user()->id)
            ->select('id')
            ->first();
        if ($blogs) {
            $id = $blogs->id;
        }



        $blog=berber_blog::insert(
          [
              "created_at" => now(),
              "updated_at" => now(),
              "blog_creator_id" => $id,
              "blog_title" => $request->blog_title,
              "blog_slug" => $slug, //işlem
              "blog_file" => $file_name,//İşlem
              "blog_content" => $request->blog_content,
              "blog_status" => $request->blog_status,
          ]
      );

      if ($blog)
      {
          return redirect(route('berber.blog'))->with('success','İşlem Başarılı');
      }
      return back()->with('error','İşlem Başarısız');

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

        $blogs=berber_blog::where('id',$id)->first();

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
            ]);

            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move(public_path('../images/blogs'),$file_name);


            $blog=berber_blog::where('id',$id)->update(
              [
                  "updated_at" => now(),
                  "blog_title" => $request->blog_title,
                  "blog_slug" => $slug,
                  "blog_file" => $file_name,
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
            $blog=berber_blog::where('id',$id)->update(
              [
                  "updated_at" => now(),
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
        $blog=berber_blog::find(intval($id));
        if($blog->delete())
        {
          echo 1;
        }
        echo 0;
    }
}
