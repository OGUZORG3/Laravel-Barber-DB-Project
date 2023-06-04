<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['packages']=Packages::orderBy('id')->paginate(3);
        return view('backend.paketler.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.paketler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('paket_file'))
        {
            $request->validate([
                'paket_ad' => 'required',
                'paket_icerik' => 'required',
                'paket_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'paket_ozellik' => 'required',
                'paket_fiyat' => 'required'
            ]);

            $file_name=uniqid().'.'.$request->paket_file->getClientOriginalExtension();
            $request->paket_file->move(public_path('../images/pack'),$file_name);
        } else {
            $file_name=null;
        }
        $paket=Packages::insert(
            [
                'paket_ad' => $request->paket_ad,
                'paket_icerik' => $request->paket_icerik,
                'paket_file' => $file_name,
                'paket_ozellik' => $request->paket_ozellik,
                'paket_fiyat' => $request->paket_fiyat,
            ]
        );
        if ($paket)
        {
            return redirect(route('paket.index'))->with('success','İşlem Başarılı');
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
        $paket=Packages::where('id',$id)->first();
        return view('backend.paketler.edit')->with('paket',$paket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('paket_file'))
        {
            $request->validate([
                'paket_ad' => 'required',
                'paket_icerik' => 'required',
                'paket_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'paket_ozellik' => 'required',
                'paket_fiyat' => 'required'
            ]);

            $file_name=uniqid().'.'.$request->paket_file->getClientOriginalExtension();
            $request->paket_file->move(public_path('../images/pack'),$file_name);

            $paket=Packages::Where('id',$id)->update(
                [
                    "paket_ad" => $request->paket_ad,
                    'paket_icerik' => $request->paket_icerik,
                    'paket_file' => $file_name,
                    'paket_ozellik' => $request->paket_ozellik,
                    'paket_fiyat' => $request->paket_fiyat,
                ]
            );

            $path='../images/pack/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        }
        else
        {
            $paket=Packages::Where('id',$id)->update(
                [
                    "paket_ad" => $request->paket_ad,
                    'paket_icerik' => $request->paket_icerik,
                    'paket_file' => $request->paket_file,
                    'paket_ozellik' => $request->paket_ozellik,
                    'paket_fiyat' => $request->paket_fiyat,
                ]
            );
        }
        if ($paket)
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
        $paket=Packages::find(intval($id));
        if ($paket->delete())
        {
            echo 1;
        }
        echo 0;
        $path='../images/pack/'.$paket->old_file;
        if (file_exists($path))
        {
            @unlink(public_path($path));
        }
    }
}
