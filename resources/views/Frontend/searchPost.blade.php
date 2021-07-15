@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage allPosts">
        <div class="container">
            <h1 class="special-heading">Search Post</h1>

            <h1>You Searched About <span style="color:tomato">[ {{ $search }} ]</span></h1>
            <div class="row">
                @foreach( $posts as $post )
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-box">
                            <div class="image">
                                <div class="overlay"></div>
                                <a href="{{ route('frontend.posts.show' , $post->slug) }}"><img style="" src="{{ asset($post->image) }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <div class="title">
                                    <a href="{{ route('frontend.posts.show' , $post->slug) }}"><h3>{{ $post->title }}</h3></a>
                                </div>
                                <p>{{ str_limit($post->content,150) }}</p>
                                <div class="dates">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span> <i class="fa fa-calendar fa-lg fa-fw"></i> <b>Date: </b> {{ $post->created_at->format('d-m-Y') }} </span>
                                        </div>
                                        <div class="col-md-12">
                                            <span> <i class="fa fa-tags fa-lg fa-fw"></i> <b>Category:</b> {{ $post->category->name }}</span>
                                        </div>
                                        <div class="col-md-12">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $posts->links() }}
        </div>
    </div>
    <!-- End Landing Page --->

@endsection