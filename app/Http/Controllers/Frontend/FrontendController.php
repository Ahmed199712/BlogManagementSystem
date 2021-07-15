<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Post;
use App\Model\Tag;
use App\Model\Comment;
use App\Model\CommentReply;
use App\User;
use App\Admin;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->take(4)->get();

        $users_count = User::count();
        $posts_count = Post::count();
        $category_count = Category::count();
        $comments_count = Comment::count();
        $replies_count = CommentReply::count();
        $tags_count = Tag::count();
        

        return view('Frontend.index' , compact(
            'posts',
            'users_count',
            'posts_count',
            'category_count',
            'comments_count',
            'replies_count',
            'tags_count'
        ));
    }
}
