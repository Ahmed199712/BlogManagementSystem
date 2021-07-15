@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.show') }} {{ trans('backend.slider') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.show') }} {{ trans('backend.slider') }}
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
                    <td>{{ $slider->title }}</td>
                </tr>
                
                <tr>
                    <td width="25%">{{ trans('backend.image') }}</td>
                    <td>
                        <img style="width:170px;height:150px" src="{{ asset($slider->image) }}" class="img-thumbnail" alt="">
                    </td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.content') }}</td>
                    <td>{{ $slider->content }}</td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.created_by') }}</td>
                    <td>{{ $slider->created_by }}</td>
                </tr>

                <tr>
                    <td width="25%">{{ trans('backend.back') }}</td>
                    <td>
                        <a href="{{ route('sliders.index') }}" class="btn btn-danger btn-block"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
