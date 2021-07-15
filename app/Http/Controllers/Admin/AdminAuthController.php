<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;
use App\Model\Category;
use App\Model\Tag;
use App\Model\Post;
use App\Model\Slider;
use App\Model\About;
use App\Model\Comment;
use App\Model\CommentReply;
use App\Model\Message;

class AdminAuthController extends Controller
{
    public function index()
    {
        $admins = Admin::count();
        $users = User::count();
        $categories = Category::count();
        $posts = Post::count();
        $tags = Tag::count();
        $comments = Comment::count();
        $replies = CommentReply::count();
        $abouts = About::count();
        $sliders = Slider::count();
        $messages = Message::count();

        return view('Admin.index' , compact(
            'admins',
            'users',
            'categories',
            'posts',
            'tags',
            'comments',
            'replies',
            'abouts',
            'sliders',
            'messages'
        ));
    }

    public function login()
    {
        return view('Admin.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = request('remember') == 1 ? true : false;

        if( auth()->guard('admin')->attempt(['email' => request('email') , 'password' => request('password')] , $remember) )
        {
            return response()->json(['successMSG' => 'Welcome']);

        }else{
            return response()->json(['errorMSG' => 'Email or password incorrect !']);
        }

    }

    public function logout()
    {   
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
