<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ekips;
use App\Models\Packages;
use Illuminate\Http\Request;

class EkipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekip['ekip']=ekips::orderby('id')->paginate(3);
        return view('backend.ekip.index')->with(compact('ekip'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.ekip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('ekip_file'))
        {
            $request->validate([
                'ekip_isim' => 'required',
                'ekip_soyisim' => 'required',
                'ekip_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'ekip_unvan' => 'required',
                'ekip_pozisyon' => 'required',
                'ekip_mail' => 'required'
            ]);

            $file_name=uniqid().'.'.$request->ekip_file->getClientOriginalExtension();
            $request->ekip_file->move(public_path('../images/ekip'),$file_name);
        }
        else
        {
            $file_name=null;
        }
        $ekip=ekips::insert(
            [
                'ekip_isim' => $request->ekip_isim,
                'ekip_soyisim' => $request->ekip_soyisim,
                'ekip_file' => $file_name,
                'ekip_unvan' => $request->ekip_unvan,
                'ekip_pozisyon' => $request->ekip_pozisyon,
                'ekip_mail' => $request->ekip_mail
            ]
        );
        if ($ekip)
        {
            return redirect(route('ekip.index'))->with('success','İşlem Başarılı');
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
        $ekip=ekips::where('id',$id)->first();
        return view('backend.ekip.edit')->with('ekip',$ekip);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('ekip_file'))
        {
            $request->validate([
                'ekip_isim' => 'required',
                'ekip_soyisim' => 'required',
                'ekip_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'ekip_unvan' => 'required',
                'ekip_pozisyon' => 'required',
                'ekip_mail' => 'required'
            ]);

            $file_name=uniqid().'.'.$request->ekip_file->getClientOriginalExtension();
            $request->ekip_file->move(public_path('../images/ekip'),$file_name);

            $ekip=ekips::Where('id',$id)->update(
                [
                    "ekip_isim" => $request->ekip_isim,
                    'ekip_soyisim' => $request->ekip_soyisim,
                    'ekip_file' => $file_name,
                    'ekip_unvan' => $request->ekip_unvan,
                    'ekip_pozisyon' => $request->ekip_pozisyon,
                    'ekip_mail' => $request->ekip_mail
                ]
            );

            $path='../images/ekip/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        }
        else
        {
            $ekip=ekips::Where('id',$id)->update(
                [
                    "ekip_isim" => $request->ekip_isim,
                    'ekip_soyisim' => $request->ekip_soyisim,
                    'ekip_unvan' => $request->ekip_unvan,
                    'ekip_pozisyon' => $request->ekip_pozisyon,
                    'ekip_mail' => $request->ekip_mail
                ]
            );
        }
        if ($ekip)
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
        $ekip=ekips::find(intval($id));
        if ($ekip->delete())
        {
            echo 1;
        }
        echo 0;
        $path='../images/ekip/'.$ekip->old_file;
        if (file_exists($path))
        {
            @unlink(public_path($path));
        }
    }
}
