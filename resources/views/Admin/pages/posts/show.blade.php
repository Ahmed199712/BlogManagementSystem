@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.show') }} {{ trans('backend.post') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.show') }} {{ trans('backend.post') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <table class="table table-hover table-bordered">
                <tr>
                    <td width="25%">{{ trans('backend.title') }}</td>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.category') }}</td>
                    <td>{{ $post->category->name }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.created_by') }}</td>
                    <td> <img src="{{ asset($post->admin->avatar) }}" style="width:40px;height:40px" alt=""> {{ $post->admin->email }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.tags') }}</td>
                    <td>
                        @foreach( $post->tags as $tag )
                            <span class="badge badge-primary" style="font-size:14px;padding:10px 5px">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.image') }}</td>
                    <td>
                        <img style="width:170px;height:150px" src="{{ asset($post->image) }}" class="img-thumbnail" alt="">
                    </td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.content') }}</td>
                    <td>{!! $post->content !!}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.back') }}</td>
                    <td>
                        <a href="{{ route('posts.index') }}" class="btn btn-danger btn-block"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>    

</div>

<!-- row closed -->
@endsection
@section('js')

@endsection
