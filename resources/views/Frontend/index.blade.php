@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="landing">
        <div class="overlay">

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="allText">
                            <h3>Welc<span>o</span>me T<span>o</span> MyBl<span>o</span>g</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quidem officiis iure nobis odit eveniet maxime quam ea necessitatibus accusamus?</p>
                            <div class="">
                                <button><a href="{{ route('frontend.posts.index') }}">Read More</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="image">
                            <img src="{{ asset('images/right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Down -->
            <div class="scrollToDown">
                <i class="fa fa-chevron-down fa-5x"></i>
            </div>

        </div>
    </div>
    <!-- End Landing Page --->



    <!-- Start Statistics -->
    <div class="statistics">
        <div class="container">
            <h1 class="special-heading">Our Statistics</h1>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Users</h3>
                                <h3>{{ $users_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-users fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Posts</h3>
                                <h3>{{ $posts_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-pencil fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Categories</h3>
                                <h3>{{ $category_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-bookmark fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Tags</h3>
                                <h3>{{ $tags_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-tags fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Comments</h3>
                                <h3>{{ $comments_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-comments fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stat-box">
                        <div>
                            <div class="left">
                                <h3>Comment Replies</h3>
                                <h3>{{ $replies_count }}</h3>
                            </div>
                            <div class="right">
                                <i class="fa fa-comment fa-fw fa-5x"></i>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <!-- End Statistics -->


    <div class="recent">
        <div class="container">
            <h1 class="special-heading">Recent Posts</h1>

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


        </div>
    </div>

@endsection