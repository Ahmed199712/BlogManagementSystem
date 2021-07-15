@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.add') }} {{ trans('backend.abouts') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.add') }} {{ trans('backend.abouts') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.title') }}</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.facebook') }}</label>
                            <input type="url" name="facebook" value="{{ old('facebook') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.twitter') }}</label>
                            <input type="url" name="twitter" value="{{ old('twitter') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.youtube') }}</label>
                            <input type="url" name="youtube" value="{{ old('youtube') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.google') }}</label>
                            <input type="url" name="google" value="{{ old('google') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ trans('backend.website') }}</label>
                            <input type="url" name="website" value="{{ old('website') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>{{ trans('backend.content') }}</label>
                            <textarea name="content" id="content"rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Image ( Avatar ) -->
                        <div class="form-group">
                            <label>{{ trans('backend.image') }}</label>
                            <input type="file" name="image" class="form-control image">
                            <img src="{{ asset('uploads/abouts/default.png') }}" class="img-thumbnail image-preview" style="margin-top:2px;width:200px;height:140px" alt="">
                        </div>

                    </div>
                </div>
                <!-- First Row -->


         
          

                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{{ trans('backend.create_new') }}</button>&nbsp;
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
        image : { required : true },
        
        
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
