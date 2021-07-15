<?php

if( !function_exists('adminurl') ){
    function adminurl(){
        return auth()->guard('admin')->user();
    }
}

if( !function_exists('userurl') ){
    function userurl(){
        return auth()->guard('web')->user();
    }
}

if( !function_exists('settings') ){
    function settings(){
        return App\Model\Setting::first();
    }
}

if( !function_exists('categories') ){
    function categories(){
        return App\Model\Category::orderBy('id','DESC')->get();
    }
}




