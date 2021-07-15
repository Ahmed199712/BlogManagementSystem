@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage postDetails">
        <div class="container">
            
        <h1 class="special-heading">{{ $post->title }}</h1>
            
            <div class="post-details">
                <div class="row">
                    <div class="offset-md-2 col-md-8">
                        <div class="image">
                            <img src="{{ asset($post->image) }}" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <a href="{{ route('frontend.posts.index') }}" class="btn btn-danger btn-block mt-4"> <i class="fa fa-reply"></i> Back</a>
            <hr>

            <div class="post-icons">
                <div class="dates">
                    <div class="row">
                        <div class="col-md-4">
                            <span> <i class="fa fa-calendar fa-lg fa-fw"></i> <b>Date: </b> {{ $post->created_at->format('d-m-Y') }} <b>|</b> {{ $post->created_at->format('H:i A') }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-tags fa-lg fa-fw"></i> <b>Category:</b> {{ $post->category->name }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-user fa-lg fa-fw"></i> <b>By:</b>  {{ $post->admin->first_name }} {{ $post->admin->last_name }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-comments fa-lg fa-fw"></i> <b>Comment:</b> {{ $post->comments->count() }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-eye fa-lg fa-fw"></i> <b>Views:</b> {{ $post->view_count }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-thumbs-up fa-lg fa-fw"></i> <b>Likes:</b> {{ $post->likes->count() }}</span>
                        </div>
                        <div class="col-md-4">
                            <span> <i class="fa fa-thumbs-down fa-lg fa-fw"></i> <b>Dis-Likes:</b> {{ $post->dislikes->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="post-tags text-center">
                <h1 class="special-heading">Post Tags</h1>
                @foreach( $post->tags as $tag )
                    <span class="badge badge-primary" style="font-size:14px;padding:5px 10px;margin:5px">
                        <a href="{{ route('getPostsByTag' , $tag->slug) }}" style="color:#fff;text-decoration:none">{{ $tag->name }}</a>
                    </span>
                @endforeach
            </div>

            

            <hr>

            <div class="post-content">
                <h1 class="special-heading">Post Content</h1>
                <p>{{ $post->content }}</p>
            </div>

            <hr>

            @if( userurl() )
                <div class="likes text-center">
                    <button type="button" class="btn btn-danger dislike" data-id="{{ $post->id }}"><i class="fa fa-thumbs-down fa-lg fa-fw"></i> Dis-Like</button> &nbsp;
                    <button type="button" class="btn btn-success like" data-id="{{ $post->id }}"><i class="fa fa-thumbs-up fa-lg fa-fw"></i> Like</button>
                </div>
            @else
                <div class="alert alert-danger text-center">You Must Login First In Order To Add Comment !</div>
            @endif

            <hr> 

            <div class="comments text-center">
                <div class="row">
                <h1 class="special-heading" style="text-align:center">Post Comments</h1>
                    @if( userurl() )
                        @if( settings()->comments_status == 1 )
                            <div class="offset-md-3 col-md-6">
                                
                                <form id="commentForm" action="{{ route('frontend.comments.save') }}" method="POST">
                                    @csrf
                                    
                                    @if( auth()->guard('web')->user() )
                                        <input type="hidden" name="user_id" value="{{ auth()->guard('web')->user()->id }}">
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                                        <textarea name="comment" required id="comment" rows="5" class="form-control textarea-comment"></textarea>
                                        <br>
                                        <button type="submit"  class="btn btn-primary btn-block saveCommentButton"> <i class="fa fa-comments"></i> Add Comment</button>
                                    @else
                                        <div class="alert alert-danger">You Must Login First In Order To Add Comment !</div>
                                    @endif
                                </form>
                            </div>
                        @else
                            <div class="alert alert-warning m-auto">
                                The Comments Are disabled from Adminstrator Now ! 
                            </div>
                        @endif
                    @else
                        <div class="alert alert-danger m-auto">You Must Login First In Order To Add Comment !</div>
                    @endif
                </div>
            </div>

            <hr>



            <!-- Comment Of Users  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="allCommentBody">
                        @foreach( $post->comments as $comment )
                            <div class="comment-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="image">
                                            <img src="{{ asset($comment->user->avatar) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="comment-text">
                                            <div class="comment-text-title">
                                                <span> <i class="fa fa-user"></i> {{ $comment->user->name }}</span> &nbsp; 
                                                |
                                                &nbsp; 
                                                <span> <span style="color:#e74a4a"><i class="fa fa-calendar"></i> {{ $comment->created_at->format('d-m-Y') }} <b>|</b> {{ $comment->created_at->format('H:i A') }} </span> </span>
                                                |
                                                &nbsp; 
                                                @if( auth()->guard('web')->user() )
                                                    @if( auth()->guard('web')->user()->id == $comment->user_id)
                                                        <span class="comment-actions">
                                                            <a href="{{ route('frontend.delete.comments') }}" data-id="{{ $comment->id }}" class="btn btn-danger btn-sm confirm-delete-comment"><i class="fa fa-close"></i> Delete Comment</a>
                                                            <a href="{{ route('frontend.edit.comments') }}"  data-id="{{ $comment->id }}" class="btn btn-info btn-sm text-white editCommentButton"><i class="fa fa-pencil"></i> Edit Comment</a>
                                                        </span>
                                                    @endif
                                                @endif
                                            </div> 
                                            <div class="comment-text-body">
                                                <p>{{ $comment->comment }} <b style="color:red">-</b> 
                                                    @if( userurl() )
                                                        @if(auth()->guard('web')->user()->id == $comment->user_id)

                                                        @else
                                                            <a href="" data-id="{{ $comment->id }}" class="replyCommentButton">Reply</a>
                                                        @endif
                                                    @else
                                                        <spa style="color:red">Login First to add reply .</spa>
                                                    @endif
                                                </p>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="comment-reply-box">
                                            @foreach( $comment->replies as $reply )
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="image">
                                                            <img src="{{ asset($reply->user->avatar) }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="comment-text-reply">
                                                            <div class="comment-text-reply-title">
                                                                <span> <i class="fa fa-user"></i> {{ $reply->user->name }}</span> &nbsp; 
                                                                |
                                                                &nbsp; 
                                                                <span> <span style="color:#e74a4a"><i class="fa fa-calendar"></i> {{ $reply->created_at->format('d-m-Y') }} <b>|</b> {{ $reply->created_at->format('H:i A') }} </span> </span>
                                                                |
                                                                &nbsp; 
                                                                @if( auth()->guard('web')->user() )
                                                                    @if( auth()->guard('web')->user()->id == $reply->user_id)
                                                                        <span class="comment-text-reply-title">
                                                                            <!--
                                                                            <a href="{{ route('frontend.delete.comments') }}" data-id="{{ $comment->id }}" class="btn btn-danger btn-sm confirm-delete-comment"><i class="fa fa-close"></i> Delete Comment</a>
                                                                            <a href="{{ route('frontend.edit.comments') }}"  data-id="{{ $comment->id }}" class="btn btn-info btn-sm text-white editCommentButton"><i class="fa fa-pencil"></i> Edit Comment</a>
                                                                            -->
                                                                        </span>
                                                                    @endif
                                                                @endif
                                                            </div> 
                                                            <div class="comment-text-reply-body">
                                                                <p>{{ $reply->comment_reply }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        

                                    </div>
                                    
                                </div>
                                
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Include Edit Comment -->
            @include('Frontend.comments.editCommentModal')
            @include('Frontend.comments.replyCommentModal')

        </div>
    </div>
    <!-- End Landing Page --->

@endsection


@push('scripts')
<script>
$(document).ready(function(){

    // Like On Post
    $(document).on('click' , '.like' , function(e){
        e.preventDefault();

        var post_id = $(this).data('id');
        
        $.ajax({
            url : "{{ route('frontend.post.like') }}",
            type : "GET",
            dataType : 'JSON',
            data : { post_id : post_id },
            beforeSent : function(){
                $(this).attr('disabled' , true);
            },
            success: function(data){
                swal({
                    title: data.message,
                    icon: "info",
                    button : "{{ trans('backend.ok') }}"
                });
                $(this).attr('disabled' , false);
            }
        });

    });

    // Dis Like On Post
    $(document).on('click' , '.dislike' , function(e){
        e.preventDefault();

        var post_id = $(this).data('id');
        
        $.ajax({
            url : "{{ route('frontend.post.dislike') }}",
            type : "GET",
            dataType : 'JSON',
            data : { post_id : post_id },
            beforeSent : function(){
                //$(this).attr('disabled' , true);
            },
            success: function(data){
                swal({
                    title: data.message,
                    icon: "info",
                    button : "{{ trans('backend.ok') }}"
                });
            }
        });

    });

    $('#commentForm').submit(function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        
        $.ajax({
            url : url,
            type : 'POST',
            dataType : 'HTML',
            data : $(this).serialize(),
            beforeSend : function(){
                $('.saveCommentButton').attr('disabled' , true);
            },
            success: function(data){
                
                
                    
                $('.saveCommentButton').attr('disabled' , false);
                $('.textarea-comment').val('');

                if( data == 'You can add comment only one time !' ){
                    swal({
                        title: data,
                        icon: "warning",
                        button : "{{ trans('backend.ok') }}"
                    });
                    return ;
                }else{
                    $('.allCommentBody').append(data);
                }

                

            }
        });

    });


    // Edit User Comment ..
    $(document).on('click' , '.editCommentButton' , function(e){
        e.preventDefault();

        var url = $(this).attr('href');
        var comment_id = $(this).data('id');


        $.ajax({
            url : url ,
            type : 'GET',
            dataType : 'JSON',
            data : { comment_id : comment_id },
            success : function(data){
                $('input.comment_id').val(data.id);
                $('.editComment').text(data.comment);
                $('.editCommentModal').modal('show');

                
            }
        });

    });

    // Update Comment Form ..
    $('#updateCommentForm').submit(function(e){
        e.preventDefault();

        var url = $(this).attr('action');

        var comment_id = $('input.comment_id').val();

        $comment_text = $('.editComment').val();


        $.ajax({
            url : url ,
            type : 'GET',
            dataType : 'HTML',
            data : $(this).serialize(),
            success : function(data){
                
                $('.editCommentModal').modal('hide');
                location.reload();
                /*swal({
                    title: data.message,
                    icon: "info",
                    button : "{{ trans('backend.ok') }}"
                });*/
            }
        });

    });


    // Confirm Delete Comment ...
    $(document).on('click' , '.confirm-delete-comment', function(e){
        e.preventDefault();

        var comment_id = $(this).data('id');
        var url = $(this).attr('href');
        
        swal({
            title: "{{ trans('backend.confirm_delete') }}",
            icon: "error",
            buttons: ["{{ trans('backend.no') }}", "{{ trans('backend.yes') }}"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : url,
                    type : 'GET',
                    dataType : 'HTML',
                    data : { comment_id : comment_id },
                    beforeSend : function(){
                        $('.confirm-delete-comment').attr('disabled' , true);
                    },
                    success: function(data){
                        $('.confirm-delete-comment').attr('disabled' , false);
                        if( data == 'You Must Login First !' ){
                            swal({
                                title: data,
                                icon: "warning",
                                button : "{{ trans('backend.ok') }}"
                            });
                        }else{
                            location.reload();
                        }
                    }

                });
            }
        });


    });

    // Adding Reply On Comments ...
    $(document).on('click' , '.replyCommentButton' , function(e){
        e.preventDefault();

        var url = $(this).attr('href');
        var comment_id  = $(this).data('id');


        // Show Modal To Add Reply ...
        $('.replyCommentModal').modal('show');

        $('.reply_comment_id').val(comment_id);


    });

    // Saving the reply on comments ..
    $('#replyCommentForm').submit(function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        var comment_id = $('.reply_comment_id').val();

        $.ajax({
            url : url,
            type : 'POST',
            dataType : 'JSON',
            data : $(this).serialize(),
            success : function(data){
                if( data == 'You can add reply on comment only one time !' ){
                    $('.replyCommentModal').modal('hide');
                    $('textarea.replyComment').val('');
                    swal({
                        title: data,
                        icon: "warning",
                        button : "{{ trans('backend.ok') }}"
                    });
                    return ;
                }else{
                    location.reload();
                }
            }
        });
        

    });

});
</script>
@endpush