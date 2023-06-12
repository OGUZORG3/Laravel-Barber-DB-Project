<?php

namespace App\Http\Controllers\Backend;
use App\Models\berber_blog;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blog'] = berber_blog::all()->sortBy('id');
        $data['blog'] = berber_blog::orderBy('id')->paginate(7);
        return view('backend.blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
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



        $blog=berber_blog::insert(
            [
                "blog_title" => $request->blog_title,
                "blog_slug" => $slug, //işlem
                "blog_file" => $file_name,//İşlem
                "blog_content" => $request->blog_content,
                "blog_status" => $request->blog_status,
            ]
        );

        if ($blog)
        {
            return redirect(route('blog.index'))->with('success','İşlem Başarılı');
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
        return view('backend.blogs.edit')->with('blogs',$blogs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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

            $blog=berber_blog::Where('id',$id)->update(
                [
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
            $blog=berber_blog::Where('id',$id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug,
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );
        }





        if ($blog)
        {
            return back()->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog=berber_blog::find(intval($id));
        if ($blog->delete())
        {
            echo 1;
        }
        echo 0;
        $path='../images/blogs/'.$blog->old_file;
        if (file_exists($path))
        {
            @unlink(public_path($path));
        }
    }
    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $blogs = berber_blog::find(intval($value));
            $blogs->blog_must = intval($key);
            $blogs->save();
        }
        echo true;
    }
}
