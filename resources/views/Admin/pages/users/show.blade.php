@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.show') }} {{ trans('backend.user') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.show') }} {{ trans('backend.user') }}
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
                    <td width="25%">{{ trans('backend.name') }}</td>
                    <td>{{ $user->name }}</td>
                </tr>
                
                <tr>
                    <td width="25%">{{ trans('backend.email') }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.phone') }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.address') }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.created_by') }}</td>
                    <td>{{ $user->created_by }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.updated_by') }}</td>
                    <td>{{ $user->updated_by }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.image') }}</td>
                    <td>
                        <img style="width:170px;height:150px" src="{{ asset($user->avatar) }}" class="img-thumbnail" alt="">
                    </td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.back') }}</td>
                    <td>
                        <a href="{{ route('users.index') }}" class="btn btn-danger btn-block"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
