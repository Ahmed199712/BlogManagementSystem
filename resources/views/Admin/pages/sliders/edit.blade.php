@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.edit') }} {{ trans('backend.sliders') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.edit') }} {{ trans('backend.sliders') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('sliders.update' , $slider->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ trans('backend.title') }}</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>{{ trans('backend.content') }}</label>
                            <textarea name="content" id="content"rows="10" class="form-control">{{ $slider->content }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Image ( Avatar ) -->
                        <div class="form-group">
                            <label>{{ trans('backend.image') }}</label>
                            <input type="file" name="image" class="form-control image">
                            <img src="{{ asset($slider->image) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:200px;height:140px" alt="">
                        </div>

                    </div>
                </div>
                <!-- First Row -->


         
          

                
                <div class="text-center">
                    <button type="submit" class="btn btn-info">{{ trans('backend.update') }}</button>&nbsp;
                    <a href="{{ route('sliders.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
        title : { required : true , minlength: 3 },
        content : { required : true , minlength: 10 },
        
        
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
