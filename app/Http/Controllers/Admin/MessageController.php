<?php

namespace App\Http\Controllers\Admin;

use App\Model\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_message',['only' => 'index','show']);
        $this->middleware('Permission:create_message',['only' => 'create','store']);
        $this->middleware('Permission:edit_message',['only' => 'edit','update']);
        $this->middleware('Permission:delete_message',['only' => 'destroy','delete']);
    }
   
    public function index()
    {
        $messages = Message::orderBy('id','DESC')->get(); // This is array of all messages

        return view('Admin.pages.messages.index' , compact('messages'));        
    }

    public function show(Message $message)
    {
        return view('Admin.pages.messages.show' , compact('message'));
    }

    
    public function destroy(Message $message)
    {
        $message->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->back();
    }
}
