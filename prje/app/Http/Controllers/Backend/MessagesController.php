<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function mesaj()
    {
      $data['adminMessages']=Messages::all()->sortBy('id');
      
        return view('backend.default.Messages',compact('data'));
    }
    public function message(Request $request)
    {
      $request->validate([
        'messages_name' => 'required',
        'messages_mail' => 'required',
        'messages_tel' => 'required',
        'messages_mesaj' => 'required'



        


    ]);


    $data=messages::insert([
      'messages_name' => $request->messages_name,
      'messages_mail' => $request->messages_mail,
      'messages_tel' => $request->messages_tel,
      'messages_mesaj' => $request->messages_mesaj 
    ]);
    return back()->with('success',"Mail Başarıyla Gönderildi");
    



 }
}