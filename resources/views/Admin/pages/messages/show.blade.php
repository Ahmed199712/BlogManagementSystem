@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.show') }} {{ trans('backend.message') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.show') }} {{ trans('backend.message') }}
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
                    <td>{{ $message->name }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.email') }}</td>
                    <td>{{ $message->email }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.phone') }}</td>
                    <td>{{ $message->phone }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.subject') }}</td>
                    <td>{{ $message->subject }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.message') }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
                <tr>
                    <td width="25%">{{ trans('backend.back') }}</td>
                    <td>
                        <a href="{{ route('messages.index') }}" class="btn btn-danger btn-block"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
