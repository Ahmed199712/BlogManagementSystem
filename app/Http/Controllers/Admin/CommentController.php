<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_comment',['only' => 'index','show']);
        $this->middleware('Permission:create_comment',['only' => 'create','store']);
        $this->middleware('Permission:edit_comment',['only' => 'edit','update']);
        $this->middleware('Permission:delete_comment',['only' => 'destroy','delete']);
    }
    
    public function index()
    {
        $comments = Comment::orderBy('id','DESC')->get();

        return view('Admin.pages.comments.index' , compact('comments'));
    }

    
    public function destroy(Comment $comment)
    {
        $comment->delete();

        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->back();
    }
}
