@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.dashboard') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.dashboard') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<div class="row">


    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-users highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.admins') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $admins }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('admins.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-users highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.users') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $users }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('users.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-edit highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.posts') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $posts }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('posts.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-tags highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.categories') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $categories }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('categories.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-comments highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.comments') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $comments }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('comments.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-comment highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.reply') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $replies }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('reply.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-envelope highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.messages') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $messages }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('messages.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100 dashboard-box">
        <div class="card-body">
            <div class="clearfix">
            <div class="float-left">
                <span class="text-primary">
                <i class="fas fa-tag highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text " style="font-size:18px;font-weight:bold;color:#639a40">{{ trans('backend.tags') }}</p>
                <h4 style="font-weight:bold;font-size:25px">{{ $tags }}</h4>
            </div>
            </div>
            <p class="text-muted mt-3 pt-3 border-top">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <a href="{{ route('tags.index') }}">{{ trans('backend.show_details') }}</a>
            </p>
        </div>
        </div>
    </div>

    

    
</div>
@endsection
@section('js')

@endsection
