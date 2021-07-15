@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.show') }} {{ trans('backend.about') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.show') }} {{ trans('backend.about') }}
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
                    <td>{{ $about->title }}</td>
                </tr>
                
                <tr>
                    <td width="25%">{{ trans('backend.image') }}</td>
                    <td>
                        <img style="width:170px;height:150px" src="{{ asset($about->image) }}" class="img-thumbnail" alt="">
                    </td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.content') }}</td>
                    <td>{{ $about->content }}</td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.created_by') }}</td>
                    <td>{{ $about->created_by }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.facebook') }}</td>
                    <td><a target="_blank" style="color:#2a81ec" href="{{ $about->facebook }}">{{ $about->facebook }}</a></td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.twitter') }}</td>
                    <td><a target="_blank" style="color:#2a81ec" href="{{ $about->twitter }}">{{ $about->twitter }}</a></td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.youtube') }}</td>
                    <td><a target="_blank" style="color:#2a81ec" href="{{ $about->youtube }}">{{ $about->youtube }}</a></td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.google') }}</td>
                    <td><a target="_blank" style="color:#2a81ec" href="{{ $about->google }}">{{ $about->google }}</a></td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.website') }}</td>
                    <td><a target="_blank" style="color:#2a81ec" href="{{ $about->website }}">{{ $about->website }}</a></td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.back') }}</td>
                    <td>
                        <a href="{{ route('abouts.index') }}" class="btn btn-danger btn-block"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
