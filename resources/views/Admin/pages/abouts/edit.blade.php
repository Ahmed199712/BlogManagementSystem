@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.edit') }} {{ trans('backend.abouts') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.edit') }} {{ trans('backend.abouts') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('abouts.update' , $about->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.title') }}</label>
                            <input type="text" name="title" value="{{ $about->title }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.facebook') }}</label>
                            <input type="url" name="facebook" value="{{ $about->facebook }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.twitter') }}</label>
                            <input type="url" name="twitter" value="{{ $about->twitter }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.youtube') }}</label>
                            <input type="url" name="youtube" value="{{ $about->youtube }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.google') }}</label>
                            <input type="url" name="google" value="{{ $about->google }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.website') }}</label>
                            <input type="url" name="website" value="{{ $about->website }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>{{ trans('backend.content') }}</label>
                            <textarea name="content" id="content"rows="10" class="form-control">{{ $about->content }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Image ( Avatar ) -->
                        <div class="form-group">
                            <label>{{ trans('backend.image') }}</label>
                            <input type="file" name="image" class="form-control image">
                            <img src="{{ asset($about->image) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:200px;height:140px" alt="">
                        </div>

                    </div>
                </div>
                <!-- First Row -->


         
          

                
                <div class="text-center">
                    <button type="submit" class="btn btn-info">{{ trans('backend.update') }}</button>&nbsp;
                    <a href="{{ route('abouts.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
        facebook : {  minlength: 3 , url : true },
        twitter : {  minlength: 3 , url : true },
        google : {  minlength: 3 , url : true },
        youtube : {  minlength: 3 , url : true },
        website : {  minlength: 3 , url : true },
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
