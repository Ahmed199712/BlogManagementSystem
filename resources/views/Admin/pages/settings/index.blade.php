@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.settings') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->

@section('PageTitle')
    {{ trans('backend.settings') }}
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
        
            
                <form id="myForm" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    @include('Admin.includes._messages')

                    <!-- First Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('backend.site_name') }}</label>
                                <input type="text" name="site_name" value="{{ settings()->site_name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('backend.site_email') }}</label>
                                <input type="email" name="site_email" value="{{ settings()->site_email }}" class="form-control {{ $errors->has('site_email') ? 'is-invalid' : '' }}">
                                @if ($errors->has('site_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('site_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('backend.site_address') }}</label>
                                <input type="text" name="site_address" value="{{ settings()->site_address }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- First Row -->


                    <!-- Second Row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.site_phone') }}</label>
                                <input type="number" name="site_phone" value="{{ settings()->site_phone }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.facebook') }}</label>
                                <input type="url" name="facebook" value="{{ settings()->facebook }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.youtube') }}</label>
                                <input type="url" name="youtube" value="{{ settings()->youtube }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.twitter') }}</label>
                                <input type="url" name="twitter" value="{{ settings()->twitter }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Second Row -->


                    <!-- Third Row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.website_status') }}</label>
                                <select name="website_status" id="website_status" class="select2 form-control">
                                    <option value="1" {{ settings()->website_status == 1 ? 'selected' : ''}}>Open</option>
                                    <option value="0" {{ settings()->website_status == 0 ? 'selected' : ''}}>Close</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.comments_status') }}</label>
                                <select name="comments_status" id="comments_status" class="select2 form-control">
                                    <option value="1" {{ settings()->comments_status == 1 ? 'selected' : ''}}>Open</option>
                                    <option value="0" {{ settings()->comments_status == 0 ? 'selected' : ''}}>Close</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('backend.register_status') }}</label>
                                <select name="register_status" id="register_status" class="select2 form-control">
                                    <option value="1" {{ settings()->register_status == 1 ? 'selected' : ''}}>Open</option>
                                    <option value="0" {{ settings()->register_status == 0 ? 'selected' : ''}}>Close</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- Image ( Site Logo ) -->
                            <div class="form-group">
                                <label>{{ trans('backend.image') }}</label>
                                <input type="file" name="site_logo" class="form-control image">
                                <img src="{{ asset(settings()->site_logo) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:120px;height:100px" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <!-- Third Row -->




                    

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('backend.update') }}</button>&nbsp;
                        
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
