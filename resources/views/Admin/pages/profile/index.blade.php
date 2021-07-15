@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.profile') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->

@section('PageTitle')
    {{ trans('backend.profile') }}
@stop

@section('PageButton')
    
@stop

<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">

    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
        
            
            <form id="myForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.first_name') }}</label>
                            <input type="text" name="first_name" value="{{ adminurl()->first_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.last_name') }}</label>
                            <input type="text" name="last_name" value="{{ adminurl()->last_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.email') }}</label>
                            <input type="email" name="email" value="{{ adminurl()->email }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- First Row -->


                <!-- Second Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.phone') }}</label>
                            <input type="number" name="phone" value="{{ adminurl()->phone }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.address') }}</label>
                            <input type="text" name="address" value="{{ adminurl()->address }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- Second Row -->


                <!-- Third Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.password') }}</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.password_confirmation') }}</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- Third Row -->


                <!-- Image ( Avatar ) -->
                <div class="form-group">
                    <label>{{ trans('backend.image') }}</label>
                    <input type="file" name="avatar" class="form-control image">
                    <img src="{{ asset(adminurl()->avatar) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:120px;height:100px" alt="">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-block">{{ trans('backend.update') }}</button>&nbsp;
                </div>

            </form>
            

        </div>
    </div>

</div>

<!-- row closed -->
@endsection

@section('js')
<script>
$(document).ready(function(){
    
    

});
</script>
@endsection
