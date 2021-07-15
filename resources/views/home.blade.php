@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage profile">
        <div class="container">
            <h1 class="special-heading">My Profile.</h1>

            
            <img src="{{ asset(auth()->guard('web')->user()->avatar) }}" alt="">
            
            
        </div>
    </div>
    <!-- End Landing Page --->

@endsection