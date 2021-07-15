@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage allPosts">
        <div class="container">
            <h1 class="special-heading">My Profile</h1>

            
            <form id="myForm" action="{{ route('frontend.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    
                    <div class="row">
                        <div class="col-md-5">
                            <!-- Image ( Avatar ) -->
                            <div class="form-group">
                                <label>{{ trans('backend.image') }}</label>
                                <input type="file" name="avatar" class="form-control image">
                                <div class="text-center">
                                    <img style="width:60%;height:240px;margin-top:5px" src="{{ asset(userurl()->avatar) }}" class="img-thumbnail image-preview" style="margin-top:2px;width:120px;height:100px" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ trans('backend.name') }}</label>
                                        <input type="text" name="name" value="{{ userurl()->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ trans('backend.email') }}</label>
                                        <input type="email" name="email" value="{{ userurl()->email }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ trans('backend.phone') }}</label>
                                        <input type="number" name="phone" value="{{ userurl()->phone }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ trans('backend.address') }}</label>
                                        <input type="text" name="address" value="{{ userurl()->address }}" class="form-control">
                                    </div>
                                </div>
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
                        </div>
                    </div>

                </div>
                <!-- First Row -->




                

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-block">{{ trans('backend.update') }}</button>&nbsp;
                </div>

            </form>


        </div>
    </div>
    <!-- End Landing Page --->

@endsection

