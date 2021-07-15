@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.add') }} {{ trans('backend.admingroup') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.add') }} {{ trans('backend.admingroup') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('admingroup.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ trans('backend.name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- First Row -->


                <hr>

                <table class="table table-hover-table-striped-table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Module</th>
                            <th>Show</th>
                            <th>Create</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Admin</b></td>
                                <td><label for="show_admin">Show</label> <input type="checkbox" id="show_admin" {{ old('show_admin') ? 'checked' : '' }} name="show_admin" value="enable"></td>
                                <td><label for="create_admin">Create</label> <input type="checkbox" id="create_admin" {{ old('create_admin') ? 'checked' : '' }} name="create_admin" value="enable"></td>
                                <td><label for="edit_admin">Edit</label> <input type="checkbox" id="edit_admin" {{ old('edit_admin') ? 'checked' : '' }} name="edit_admin" value="enable"></td>
                                <td><label for="delete_admin">Delete</label> <input type="checkbox" id="delete_admin" {{ old('delete_admin') ? 'checked' : '' }} name="delete_admin" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Admin Group</b></td>
                                <td><label for="show_admingroup">Show</label> <input type="checkbox" id="show_admingroup" {{ old('show_admingroup') ? 'checked' : '' }} name="show_admingroup" value="enable"></td>
                                <td><label for="create_admingroup">Create</label> <input type="checkbox" id="create_admingroup" {{ old('create_admingroup') ? 'checked' : '' }} name="create_admingroup" value="enable"></td>
                                <td><label for="edit_admingroup">Edit</label> <input type="checkbox" id="edit_admingroup" {{ old('edit_admingroup') ? 'checked' : '' }} name="edit_admingroup" value="enable"></td>
                                <td><label for="delete_admingroup">Delete</label> <input type="checkbox" id="delete_admingroup" {{ old('delete_admingroup') ? 'checked' : '' }} name="delete_admingroup" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Category</b></td>
                                <td><label for="show_category">Show</label> <input type="checkbox" id="show_category" {{ old('show_category') ? 'checked' : '' }} name="show_category" value="enable"></td>
                                <td><label for="create_category">Create</label> <input type="checkbox" id="create_category" {{ old('create_category') ? 'checked' : '' }} name="create_category" value="enable"></td>
                                <td><label for="edit_category">Edit</label> <input type="checkbox" id="edit_category" {{ old('edit_category') ? 'checked' : '' }} name="edit_category" value="enable"></td>
                                <td><label for="delete_category">Delete</label> <input type="checkbox" id="delete_category" {{ old('delete_category') ? 'checked' : '' }} name="delete_category" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Post</b></td>
                                <td><label for="show_post">Show</label> <input type="checkbox" id="show_post" {{ old('show_post') ? 'checked' : '' }} name="show_post" value="enable"></td>
                                <td><label for="create_post">Create</label> <input type="checkbox" id="create_post" {{ old('create_post') ? 'checked' : '' }} name="create_post" value="enable"></td>
                                <td><label for="edit_post">Edit</label> <input type="checkbox" id="edit_post" {{ old('edit_post') ? 'checked' : '' }} name="edit_post" value="enable"></td>
                                <td><label for="delete_post">Delete</label> <input type="checkbox" id="delete_post" {{ old('delete_post') ? 'checked' : '' }} name="delete_post" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">User</b></td>
                                <td><label for="show_user">Show</label> <input type="checkbox" id="show_user" {{ old('show_user') ? 'checked' : '' }} name="show_user" value="enable"></td>
                                <td><label for="create_user">Create</label> <input type="checkbox" id="create_user" {{ old('create_user') ? 'checked' : '' }} name="create_user" value="enable"></td>
                                <td><label for="edit_user">Edit</label> <input type="checkbox" id="edit_user" {{ old('edit_user') ? 'checked' : '' }} name="edit_user" value="enable"></td>
                                <td><label for="delete_user">Delete</label> <input type="checkbox" id="delete_user" {{ old('delete_user') ? 'checked' : '' }} name="delete_user" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Tag</b></td>
                                <td><label for="show_tag">Show</label> <input type="checkbox" id="show_tag" {{ old('show_tag') ? 'checked' : '' }} name="show_tag" value="enable"></td>
                                <td><label for="create_tag">Create</label> <input type="checkbox" id="create_tag" {{ old('create_tag') ? 'checked' : '' }} name="create_tag" value="enable"></td>
                                <td><label for="edit_tag">Edit</label> <input type="checkbox" id="edit_tag" {{ old('edit_tag') ? 'checked' : '' }} name="edit_tag" value="enable"></td>
                                <td><label for="delete_tag">Delete</label> <input type="checkbox" id="delete_tag" {{ old('delete_tag') ? 'checked' : '' }} name="delete_tag" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Slider</b></td>
                                <td><label for="show_slider">Show</label> <input type="checkbox" id="show_slider" {{ old('show_slider') ? 'checked' : '' }} name="show_slider" value="enable"></td>
                                <td><label for="create_slider">Create</label> <input type="checkbox" id="create_slider" {{ old('create_slider') ? 'checked' : '' }} name="create_slider" value="enable"></td>
                                <td><label for="edit_slider">Edit</label> <input type="checkbox" id="edit_slider" {{ old('edit_slider') ? 'checked' : '' }} name="edit_slider" value="enable"></td>
                                <td><label for="delete_slider">Delete</label> <input type="checkbox" id="delete_slider" {{ old('delete_slider') ? 'checked' : '' }} name="delete_slider" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Message</b></td>
                                <td><label for="show_message">Show</label> <input type="checkbox" id="show_message" {{ old('show_message') ? 'checked' : '' }} name="show_message" value="enable"></td>
                                <td><label for="create_message">Create</label> <input type="checkbox" id="create_message" {{ old('create_message') ? 'checked' : '' }} name="create_message" value="enable"></td>
                                <td><label for="edit_message">Edit</label> <input type="checkbox" id="edit_message" {{ old('edit_message') ? 'checked' : '' }} name="edit_message" value="enable"></td>
                                <td><label for="delete_message">Delete</label> <input type="checkbox" id="delete_message" {{ old('delete_message') ? 'checked' : '' }} name="delete_message" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Comment</b></td>
                                <td><label for="show_comment">Show</label> <input type="checkbox" id="show_comment" {{ old('show_comment') ? 'checked' : '' }} name="show_comment" value="enable"></td>
                                <td><label for="create_comment">Create</label> <input type="checkbox" id="create_comment" {{ old('create_comment') ? 'checked' : '' }} name="create_comment" value="enable"></td>
                                <td><label for="edit_comment">Edit</label> <input type="checkbox" id="edit_comment" {{ old('edit_comment') ? 'checked' : '' }} name="edit_comment" value="enable"></td>
                                <td><label for="delete_comment">Delete</label> <input type="checkbox" id="delete_comment" {{ old('delete_comment') ? 'checked' : '' }} name="delete_comment" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Comment Reply</b></td>
                                <td><label for="show_commentreply">Show</label> <input type="checkbox" id="show_commentreply" {{ old('show_commentreply') ? 'checked' : '' }} name="show_commentreply" value="enable"></td>
                                <td><label for="create_commentreply">Create</label> <input type="checkbox" id="create_commentreply" {{ old('create_commentreply') ? 'checked' : '' }} name="create_commentreply" value="enable"></td>
                                <td><label for="edit_commentreply">Edit</label> <input type="checkbox" id="edit_commentreply" {{ old('edit_commentreply') ? 'checked' : '' }} name="edit_commentreply" value="enable"></td>
                                <td><label for="delete_commentreply">Delete</label> <input type="checkbox" id="delete_commentreply" {{ old('delete_commentreply') ? 'checked' : '' }} name="delete_commentreply" value="enable"></td>
                            </tr>


                            <tr>
                                <td><b style="color:#639a40;font-size:17px">About</b></td>
                                <td><label for="show_about">Show</label> <input type="checkbox" id="show_about" {{ old('show_about') ? 'checked' : '' }} name="show_about" value="enable"></td>
                                <td><label for="create_about">Create</label> <input type="checkbox" id="create_about" {{ old('create_about') ? 'checked' : '' }} name="create_about" value="enable"></td>
                                <td><label for="edit_about">Edit</label> <input type="checkbox" id="edit_about" {{ old('edit_about') ? 'checked' : '' }} name="edit_about" value="enable"></td>
                                <td><label for="delete_about">Delete</label> <input type="checkbox" id="delete_about" {{ old('delete_about') ? 'checked' : '' }} name="delete_about" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Settings</b></td>
                                <td><label for="show_setting">Show</label> <input type="checkbox" id="show_setting" {{ old('show_setting') ? 'checked' : '' }} name="show_setting" value="enable"></td>
                                <td></td>
                                <td><label for="edit_setting">Edit</label> <input type="checkbox" id="edit_setting" {{ old('edit_setting') ? 'checked' : '' }} name="edit_setting" value="enable"></td>
                                <td></td>
                            </tr>

                    </tbody>
                </table>


                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{{ trans('backend.create_new') }}</button>&nbsp;
                    <a href="{{ route('admingroup.index') }}" class="btn btn-danger"> <i class="fa fa-reply"></i> {{ trans('backend.back') }}</a>
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
        name : { required : true , minlength: 3 },
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
