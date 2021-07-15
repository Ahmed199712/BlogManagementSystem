@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage about">
        <div class="container">
            <h1 class="special-heading">About Us</h1>

            
            @foreach($abouts as $about)
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <h3>{{ $about->title }}</h3>
                        <p>{{ $about->content }}</p>
                        <div class="social">
                            <a target="_blank" href="{{ $about->facebook }}"><i title="facebook" class="fa fa-facebook"></i></a>
                            <a target="_blank" href="{{ $about->twitter }}"><i title="twitter" class="fa fa-twitter"></i></a>
                            <a target="_blank" href="{{ $about->youtube }}"><i title="youtube" class="fa fa-youtube"></i></a>
                            <a target="_blank" href="{{ $about->google }}"><i title="google" class="fa fa-google"></i></a>
                            <a target="_blank" href="{{ $about->website }}"><i title="website" class="fa fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="image">
                            <img src="{{ asset($about->image) }}" alt="" style="height:300px">
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            
            
            
        </div>
    </div>
    <!-- End Landing Page --->

@endsection