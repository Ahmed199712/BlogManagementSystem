<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use App\Model\Category;
use App\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_post',['only' => 'index','show']);
        $this->middleware('Permission:create_post',['only' => 'create','store']);
        $this->middleware('Permission:edit_post',['only' => 'edit','update']);
        $this->middleware('Permission:delete_post',['only' => 'destroy','delete']);
    }

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->get();

        return view('Admin.pages.posts.index' , compact('posts'));
    }

   
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('Admin.pages.posts.create' , compact('categories','tags'));
    }


    public function store(Request $request)
    {

        
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'category_id' => 'required',
            'tag' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
        ]);

        $post = new Post;
        if( $request->image ){
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/posts/' . $request->image->hashName());
            $post->image = 'uploads/posts/'.$request->image->hashName();
        }
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->admin_id = adminurl()->id;
        $post->created_by = adminurl()->email;
        $post->save();


        // Attach Tags With Post
        $post->tags()->attach($request->tag);

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('posts.index');
    }

    
    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('Admin.pages.posts.show' , compact(
            'post',
            'categories',
            'tags'
        ));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('Admin.pages.posts.edit' , compact(
            'post',
            'categories',
            'tags'
        ));
    }

  
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'category_id' => 'required',
            'tag' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif',
        ]);

        if( $request->image ){
            if( $post->image != 'uploads/posts/default.png' ){
                unlink($post->image);
            }
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/posts/' . $request->image->hashName());
            $post->image = 'uploads/posts/'.$request->image->hashName();
        }
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->admin_id = adminurl()->id;
        $post->created_by = adminurl()->email;
        $post->save();


        // Attach Tags With Post
        $post->tags()->sync($request->tag);

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        if( $post->image != 'uploads/posts/default.png' ){
            unlink($post->image);
        }
        $post->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('posts.index');
    }
}
