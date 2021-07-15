@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.add') }} {{ trans('backend.tags') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.add') }} {{ trans('backend.tags') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- First Row -->



             

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{{ trans('backend.create_new') }}</button>&nbsp;
                    <a href="{{ route('tags.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
        name : { required : true , minlength: 3 }
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
