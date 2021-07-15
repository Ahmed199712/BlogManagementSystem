@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.edit') }} {{ trans('backend.admins') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.edit') }} {{ trans('backend.admins') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('admins.update' , $admin->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.first_name') }}</label>
                            <input type="text" name="first_name" value="{{ $admin->first_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.last_name') }}</label>
                            <input type="text" name="last_name" value="{{ $admin->last_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('backend.email') }}</label>
                            <input type="email" name="email" value="{{ $admin->email }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- First Row -->


                <!-- Second Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.phone') }}</label>
                            <input type="number" name="phone" value="{{ $admin->phone }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.address') }}</label>
                            <input type="text" name="address" value="{{ $admin->address }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- Second Row -->


                <!-- Third Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.password') }}</label>
                            <input type="password" name="password" class="form-control">
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


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Group</label>
                            <select name="group_id" id="group_id" class="form-control">
                                @foreach($admingroup as $group)
                                    <option value="{{ $group->id }}" {{ $admin->group_id == $group->id ? 'selected' : '' }} >{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Image ( Avatar ) -->
                        <div class="form-group">
                            <label>{{ trans('backend.image') }}</label>
                            <input type="file" name="avatar" class="form-control image">
                            <img src="{{ asset($admin->avatar) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:120px;height:100px" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success text-white ">{{ trans('backend.update') }}</button> &nbsp;
                    <a href="{{ route('admins.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
</script>
@endsection
