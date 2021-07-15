@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.edit') }} {{ trans('backend.categories') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.edit') }} {{ trans('backend.categories') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('categories.update' , $category->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.name') }}</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- First Row -->



             

                <div class="text-center">
                    <button type="submit" class="btn btn-info">{{ trans('backend.update') }}</button>&nbsp;
                    <a href="{{ route('categories.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
