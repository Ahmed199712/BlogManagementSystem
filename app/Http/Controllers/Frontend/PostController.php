<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Tag;
use App\Model\Like;
use App\Model\Dislike;
use App\Model\Category;

class PostController extends Controller
{
  
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->paginate(4);

        return view('Frontend.allPosts' , compact('posts'));
    }

   
    public function show($slug)
    {
        $post = Post::where('slug' , $slug)->first();

        if( !$post ){
            return redirect()->back();
        }

        $post->view_count += 1;
        $post->save();


        return view('Frontend.showPost' , compact('post'));
    }

    

    public function postLike(Request $request)
    {

        $post_id = $request->post_id;

        
        
        if( auth()->guard('web')->user() ){
            
            $check = Like::where('post_id' , $post_id)->where('user_id',auth()->guard('web')->user()->id)->first();

            if( $check ){
                return response()->json(['message' => 'You Already Liked The Post !']);
            }else{
                $like = new Like;
                $like->like += 1;
                $like->post_id = $post_id;
                $like->user_id = auth()->guard('web')->user()->id;
                $like->save();
                return response()->json(['message' => 'Like Added Successfully ...']);
            }
            
            
        }else{
            return response()->json(['message' => 'You Must Login in order to like !.']);
        }
        
        
    }

    public function postDisLike(Request $request)
    {
        $post_id = $request->post_id;

        
        
        if( auth()->guard('web')->user() ){

            $check = DisLike::where('post_id' , $post_id)->where('user_id',auth()->guard('web')->user()->id)->first();

            if( $check ){
                return response()->json(['message' => 'You Already Dis-Liked The Post !']);
            }else{
                $dislike = new Dislike;
                $dislike->dislike += 1;
                $dislike->post_id = $post_id;
                $dislike->user_id = auth()->guard('web')->user()->id;
                $dislike->save();
                return response()->json(['message' => 'Dislike Added Successfully ...']);
            }
            
        }else{
            return response()->json(['message' => 'You Must Login in order to dislike !.']);
        }
    }


    public function getPostsByCategory($slug)
    {
       $category = Category::where('slug',$slug)->first();

       $posts = Post::where('category_id' , $category->id)->orderBy('id','DESC')->paginate(4);

       return view('Frontend.categories.getPostsByCategory' , compact(
           'category',
           'posts'
       ));

    }

    public function getPostsByTag($slug)
    {
        $tag = Tag::where('slug' , $slug)->first();

        $posts = $tag->posts()->paginate(4);


        return view('Frontend.categories.getPostsByTag' , compact(
            'tag',
            'posts'
        ));
    }

    public function getSearch(Request $request)
    {
        $title = $request->title;

        $posts = Post::where('title' , 'LIKE' , '%'.$title.'%')->take(5)->get();


        
        $html = '';
        $html .= '<div><ul>';
        
        if( $posts->count() > 0 ){
            foreach( $posts as $post ){
                $html .= 
                '<li class="postLiSearch">
                    <img src="'.asset($post->image).'" style="width:70px;height:60px"> &nbsp;
                    '.$post->title.'
                </li>';
            }
        }else{
            $html .= '<li>There is no result !</li>';
        }
        
        $html .= "</ul></div>";

        return response()->json($html);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $post = Post::where('title' , 'LIKE', '%'.$search.'%')->first();


        return view('Frontend.showPost' , compact('post','search'));

    }
}
