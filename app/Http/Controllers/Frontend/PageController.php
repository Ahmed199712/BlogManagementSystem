<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message;
use App\Model\About;
use App\Model\Comment;
use App\Model\CommentReply;

class PageController extends Controller
{
    public function about()
    {
        $abouts = About::orderBy('id','DESC')->get();

        return view('Frontend.pages.about' , compact('abouts'));
    }

    public function contact()
    {
        return view('Frontend.pages.contact');
    }

    public function saveContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Message;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        session()->flash('success' , 'Message has been sent successfully ...');
        return redirect()->back();
    }


    public function saveComment(Request $request)
    {


        $existComment = Comment::where('post_id',$request->post_id)->where('user_id' , $request->user_id)->first();

        if( $existComment ){
            return 'You can add comment only one time !';
        }else{
            $comment = new Comment;
            $comment->comment = $request->comment;
            $comment->user_id = $request->user_id;
            $comment->post_id = $request->post_id;
            $comment->save();

            $html = '
            <div class="comment-box">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image">
                            <img src="'.asset($comment->user->avatar).'" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="comment-text">
                            <div class="comment-text-title">
                                <span> <i class="fa fa-user"></i> '.$comment->user->name.' </span> &nbsp; 
                                |
                                &nbsp; 
                                <span> <span style="color:#e74a4a"><i class="fa fa-calendar"></i> '.$comment->created_at->format('d-m-Y').' <b>|</b> '.$comment->created_at->format('H:i A').' </span> </span>
                                |
                                &nbsp; 
                                <span class="comment-actions">
                                    <a href="'. route('frontend.delete.comments') .'" data-id="'.$comment->id.'" class="btn btn-danger btn-sm confirm-delete-comment"><i class="fa fa-close"></i> Delete Comment</a>
                                    <a href="'.route('frontend.edit.comments').'"  data-id="'.$comment->id.'" class="btn btn-info btn-sm text-white editCommentButton"><i class="fa fa-pencil"></i> Edit Comment</a>
                                </span>
                            </div> 
                            <div class="comment-text-body">
                                <p>'.$comment->comment.'</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            return $html;
        }

        
    }


    public function editComment(Request $request)
    {
        $comment_id = $request->comment_id;

        $comment = Comment::find($comment_id);

        return $comment;
    }


    public function updateComment(Request $request)
    {
        $comment_id = $request->comment_id;


        $comment = Comment::find($comment_id);
        $comment->comment = $request->comment_text;
        $comment->save();

            $html = '
            <div class="comment-box">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image">
                            <img src="'.asset($comment->user->avatar).'" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="comment-text">
                            <div class="comment-text-title">
                                <span> <i class="fa fa-user"></i> '.$comment->user->name.' </span> &nbsp; 
                                |
                                &nbsp; 
                                <span> <span style="color:#e74a4a"><i class="fa fa-calendar"></i> '.$comment->created_at->format('d-m-Y').' <b>|</b> '.$comment->created_at->format('H:i A').' </span> </span>
                                |
                                &nbsp; 
                                <span class="comment-actions">
                                    <a href="'. route('frontend.delete.comments') .'" data-id="'.$comment->id.'" class="btn btn-danger btn-sm confirm-delete-comment"><i class="fa fa-close"></i> Delete Comment</a>
                                    <a href="'.route('frontend.edit.comments').'"  data-id="'.$comment->id.'" class="btn btn-info btn-sm text-white editCommentButton"><i class="fa fa-pencil"></i> Edit Comment</a>
                                </span>
                            </div> 
                            <div class="comment-text-body">
                                <p>'.$comment->comment.'</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            return $html;
        
    }


    public function deleteComment(Request $request)
    {

        $existComment = Comment::where('id' , $request->comment_id)->first();

        if( auth()->guard('web')->user() ){
            if( $existComment->user_id == auth()->guard('web')->user()->id ){

                $existComment->delete();

                return "Comment Deleted Successfully";

            }else{

                return 'You can delete only your comment !';

            }
        }else{
            return 'You Must Login First !';
        }

    }

    public function saveCommentReply(Request $request)
    {
        $comment_text = $request->comment_text;
        $comment_id   = $request->comment_id;
        $user_id      = userurl()->id;




        $existCommentReply = CommentReply::where('user_id',$user_id)->where('comment_id' , $comment_id)->first();

        if( $existCommentReply ){
            return response()->json('You can add reply on comment only one time !');
        }else{
            $commentReply = new CommentReply;
            $commentReply->comment_reply = $comment_text;
            $commentReply->user_id = $user_id;
            $commentReply->comment_id = $comment_id;
            $commentReply->save();

            return $commentReply;
        }
        

        
    }
}
