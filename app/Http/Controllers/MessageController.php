<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Documents;

class MessagesController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
        
    }
    public function index(){

        $messages = Messages::all();

        return view('admin.messages_list',compact('messages'));

    }

    public function show($id){

        $message = Messages::find($id);

        $message->seen = 1;
        $message->save();

        $documents = Documents::where('id_message','=',$id)->get();

        return view('admin.messages_show',compact('message','documents'));

    }
}
