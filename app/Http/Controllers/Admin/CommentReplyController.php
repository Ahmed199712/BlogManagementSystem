<?php

namespace App\Http\Controllers\Admin;

use App\Model\CommentReply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentReplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_commentreply',['only' => 'index','show']);
        $this->middleware('Permission:create_commentreply',['only' => 'create','store']);
        $this->middleware('Permission:edit_commentreply',['only' => 'edit','update']);
        $this->middleware('Permission:delete_commentreply',['only' => 'destroy','delete']);
    }
   
    public function index()
    {
        $comments_reply = CommentReply::orderBy('id','DESC')->get();

        return view('Admin.pages.comments_reply.index' , compact('comments_reply'));
    }

   
    
    public function destroy($id)
    {

        $commentReply = CommentReply::find($id);
        $commentReply->delete();

        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->back();
    }
}
