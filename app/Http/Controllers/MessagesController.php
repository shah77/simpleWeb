<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    $this->validate($request,[
        'name' => 'required',
        'email' => 'required'
    ]); 

    $messages = new Message;
    $messages->name = $request->input('name');
    $messages->email = $request->input('email');
    $messages->message = $request->input('message');

    $messages->save();

       return redirect('/'); 
    }
}
