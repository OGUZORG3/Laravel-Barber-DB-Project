<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pages;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = pages::all()->sortBy('page_must');
        return view('backend.pages.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        } else {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate([
                'page_title' => 'required',
                'page_content' => 'required',
                'page_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('../images/pages'),$file_name);
        } else {
            $file_name=null;
        }



        $page=pages::insert(
            [
                "page_title" => $request->page_title,
                "page_slug" => $slug, //işlem
                "page_file" => $file_name,//İşlem
                "page_content" => $request->page_content,
                "page_status" => $request->page_status,
            ]
        );

        if ($page)
        {
            return redirect(route('page.index'))->with('success','İşlem Başarılı');
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
        $pages=pages::where('id',$id)->first();
        return view('backend.pages.edit')->with('pages',$pages);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        } else {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate([
                'page_title' => 'required',
                'page_content' => 'required',
                'page_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('../images/pages'),$file_name);

            $page=pages::Where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug, //işlem
                    "page_file" => $file_name,//İşlem
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                ]
            );

            $path='../images/pages/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        } else {
            $page=pages::Where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug,
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                ]
            );
        }





        if ($page)
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
        $page=pages::find(intval($id));
        if ($page->delete())
        {
            echo 1;
        }
        echo 0;
        $path='../images/pages/'.$page->old_file;
        if (file_exists($path))
        {
            @unlink(public_path($path));
        }
    }
    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $pages = pages::find(intval($value));
            $pages->page_must = intval($key);
            $pages->save();
        }
        echo true;
    }
}
