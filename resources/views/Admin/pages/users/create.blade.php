@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.add') }} {{ trans('backend.users') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.add') }} {{ trans('backend.users') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
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
                            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.address') }}</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control">
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
                    <img src="{{ asset('uploads/avatars/default.png') }}" class="img-thumbnail image-preview" style="margin-top:2px;width:120px;height:100px" alt="">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{{ trans('backend.create_new') }}</button>&nbsp;
                    <a href="{{ route('users.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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



  // Validate Form ...
  $('#myForm').validate({
      rules : {
        first_name : { required : true , minlength: 3 },
        last_name : { required : true , minlength: 3 },
        email : { required : true , email: true },
        password : { required : true , minlength: 6 },
        password_confirmation : { required : true , equalTo : '#password', minlength: 6 },
        
        
      },
      messages : {

      },
      errorEelement : 'span',
      errorPlacement : function(error , element){
          
          element.closest('.form-group').append(error);
          
      },

  });

});
</script>
@endsection
