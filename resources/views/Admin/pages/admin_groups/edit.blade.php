@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.edit') }} {{ trans('backend.admingroup') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('backend.edit') }} {{ trans('backend.admingroup') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">
    
    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
            
            <form id="myForm" action="{{ route('admingroup.update' , $admingroup->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('Admin.includes._messages')

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ trans('backend.name') }}</label>
                            <input type="text" name="name" value="{{ $admingroup->name }}" class="form-control">
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
                                <td><label for="show_admin">Show</label> <input type="checkbox" id="show_admin" {{ $admingroup->show_admin == 'enable' ? 'checked' : '' }} name="show_admin" value="enable"></td>
                                <td><label for="create_admin">Create</label> <input type="checkbox" id="create_admin" {{ $admingroup->create_admin == 'enable' ? 'checked' : '' }} name="create_admin" value="enable"></td>
                                <td><label for="edit_admin">Edit</label> <input type="checkbox" id="edit_admin" {{ $admingroup->edit_admin == 'enable' ? 'checked' : '' }} name="edit_admin" value="enable"></td>
                                <td><label for="delete_admin">Delete</label> <input type="checkbox" id="delete_admin" {{ $admingroup->delete_admin == 'enable' ? 'checked' : '' }} name="delete_admin" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Admin Group</b></td>
                                <td><label for="show_admingroup">Show</label> <input type="checkbox" id="show_admingroup" {{ $admingroup->show_admingroup == 'enable' ? 'checked' : '' }} name="show_admingroup" value="enable"></td>
                                <td><label for="create_admingroup">Create</label> <input type="checkbox" id="create_admingroup" {{ $admingroup->create_admingroup == 'enable' ? 'checked' : '' }} name="create_admingroup" value="enable"></td>
                                <td><label for="edit_admingroup">Edit</label> <input type="checkbox" id="edit_admingroup" {{ $admingroup->edit_admingroup == 'enable' ? 'checked' : '' }} name="edit_admingroup" value="enable"></td>
                                <td><label for="delete_admingroup">Delete</label> <input type="checkbox" id="delete_admingroup" {{ $admingroup->delete_admingroup == 'enable' ? 'checked' : '' }} name="delete_admingroup" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Category</b></td>
                                <td><label for="show_category">Show</label> <input type="checkbox" id="show_category" {{ $admingroup->show_category == 'enable' ? 'checked' : '' }} name="show_category" value="enable"></td>
                                <td><label for="create_category">Create</label> <input type="checkbox" id="create_category" {{ $admingroup->create_category == 'enable' ? 'checked' : '' }} name="create_category" value="enable"></td>
                                <td><label for="edit_category">Edit</label> <input type="checkbox" id="edit_category" {{ $admingroup->edit_category == 'enable' ? 'checked' : '' }} name="edit_category" value="enable"></td>
                                <td><label for="delete_category">Delete</label> <input type="checkbox" id="delete_category" {{ $admingroup->delete_category == 'enable' ? 'checked' : '' }} name="delete_category" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Post</b></td>
                                <td><label for="show_post">Show</label> <input type="checkbox" id="show_post" {{ $admingroup->show_post == 'enable' ? 'checked' : '' }} name="show_post" value="enable"></td>
                                <td><label for="create_post">Create</label> <input type="checkbox" id="create_post" {{ $admingroup->create_post == 'enable' ? 'checked' : '' }} name="create_post" value="enable"></td>
                                <td><label for="edit_post">Edit</label> <input type="checkbox" id="edit_post" {{ $admingroup->edit_post == 'enable' ? 'checked' : '' }} name="edit_post" value="enable"></td>
                                <td><label for="delete_post">Delete</label> <input type="checkbox" id="delete_post" {{ $admingroup->delete_post == 'enable' ? 'checked' : '' }} name="delete_post" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">User</b></td>
                                <td><label for="show_user">Show</label> <input type="checkbox" id="show_user" {{ $admingroup->show_user == 'enable' ? 'checked' : '' }} name="show_user" value="enable"></td>
                                <td><label for="create_user">Create</label> <input type="checkbox" id="create_user" {{ $admingroup->create_user == 'enable' ? 'checked' : '' }} name="create_user" value="enable"></td>
                                <td><label for="edit_user">Edit</label> <input type="checkbox" id="edit_user" {{ $admingroup->edit_user == 'enable' ? 'checked' : '' }} name="edit_user" value="enable"></td>
                                <td><label for="delete_user">Delete</label> <input type="checkbox" id="delete_user" {{ $admingroup->delete_user == 'enable' ? 'checked' : '' }} name="delete_user" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Tag</b></td>
                                <td><label for="show_tag">Show</label> <input type="checkbox" id="show_tag" {{ $admingroup->show_tag == 'enable' ? 'checked' : '' }} name="show_tag" value="enable"></td>
                                <td><label for="create_tag">Create</label> <input type="checkbox" id="create_tag" {{ $admingroup->create_tag == 'enable' ? 'checked' : '' }} name="create_tag" value="enable"></td>
                                <td><label for="edit_tag">Edit</label> <input type="checkbox" id="edit_tag" {{ $admingroup->edit_tag == 'enable' ? 'checked' : '' }} name="edit_tag" value="enable"></td>
                                <td><label for="delete_tag">Delete</label> <input type="checkbox" id="delete_tag" {{ $admingroup->delete_tag == 'enable' ? 'checked' : '' }} name="delete_tag" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Slider</b></td>
                                <td><label for="show_slider">Show</label> <input type="checkbox" id="show_slider" {{ $admingroup->show_slider == 'enable' ? 'checked' : '' }} name="show_slider" value="enable"></td>
                                <td><label for="create_slider">Create</label> <input type="checkbox" id="create_slider" {{ $admingroup->create_slider == 'enable' ? 'checked' : '' }} name="create_slider" value="enable"></td>
                                <td><label for="edit_slider">Edit</label> <input type="checkbox" id="edit_slider" {{ $admingroup->edit_slider == 'enable' ? 'checked' : '' }} name="edit_slider" value="enable"></td>
                                <td><label for="delete_slider">Delete</label> <input type="checkbox" id="delete_slider" {{ $admingroup->delete_slider == 'enable' ? 'checked' : '' }} name="delete_slider" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Message</b></td>
                                <td><label for="show_message">Show</label> <input type="checkbox" id="show_message" {{ $admingroup->show_message == 'enable' ? 'checked' : '' }} name="show_message" value="enable"></td>
                                <td><label for="create_message">Create</label> <input type="checkbox" id="create_message" {{ $admingroup->create_message == 'enable' ? 'checked' : '' }} name="create_message" value="enable"></td>
                                <td><label for="edit_message">Edit</label> <input type="checkbox" id="edit_message" {{ $admingroup->edit_message == 'enable' ? 'checked' : '' }} name="edit_message" value="enable"></td>
                                <td><label for="delete_message">Delete</label> <input type="checkbox" id="delete_message" {{ $admingroup->delete_message == 'enable' ? 'checked' : '' }} name="delete_message" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Comment</b></td>
                                <td><label for="show_comment">Show</label> <input type="checkbox" id="show_comment" {{ $admingroup->show_comment == 'enable' ? 'checked' : '' }} name="show_comment" value="enable"></td>
                                <td><label for="create_comment">Create</label> <input type="checkbox" id="create_comment" {{ $admingroup->create_comment == 'enable' ? 'checked' : '' }} name="create_comment" value="enable"></td>
                                <td><label for="edit_comment">Edit</label> <input type="checkbox" id="edit_comment" {{ $admingroup->edit_comment == 'enable' ? 'checked' : '' }} name="edit_comment" value="enable"></td>
                                <td><label for="delete_comment">Delete</label> <input type="checkbox" id="delete_comment" {{ $admingroup->delete_comment == 'enable' ? 'checked' : '' }} name="delete_comment" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Comment Reply</b></td>
                                <td><label for="show_commentreply">Show</label> <input type="checkbox" id="show_commentreply" {{ $admingroup->show_commentreply == 'enable' ? 'checked' : '' }} name="show_commentreply" value="enable"></td>
                                <td><label for="create_commentreply">Create</label> <input type="checkbox" id="create_commentreply" {{ $admingroup->create_commentreply == 'enable' ? 'checked' : '' }} name="create_commentreply" value="enable"></td>
                                <td><label for="edit_commentreply">Edit</label> <input type="checkbox" id="edit_commentreply" {{ $admingroup->edit_commentreply == 'enable' ? 'checked' : '' }} name="edit_commentreply" value="enable"></td>
                                <td><label for="delete_commentreply">Delete</label> <input type="checkbox" id="delete_commentreply" {{ $admingroup->delete_commentreply == 'enable' ? 'checked' : '' }} name="delete_commentreply" value="enable"></td>
                            </tr>


                            <tr>
                                <td><b style="color:#639a40;font-size:17px">About</b></td>
                                <td><label for="show_about">Show</label> <input type="checkbox" id="show_about" {{ $admingroup->show_about == 'enable' ? 'checked' : '' }} name="show_about" value="enable"></td>
                                <td><label for="create_about">Create</label> <input type="checkbox" id="create_about" {{ $admingroup->create_about == 'enable' ? 'checked' : '' }} name="create_about" value="enable"></td>
                                <td><label for="edit_about">Edit</label> <input type="checkbox" id="edit_about" {{ $admingroup->edit_about == 'enable' ? 'checked' : '' }} name="edit_about" value="enable"></td>
                                <td><label for="delete_about">Delete</label> <input type="checkbox" id="delete_about" {{ $admingroup->delete_about == 'enable' ? 'checked' : '' }} name="delete_about" value="enable"></td>
                            </tr>

                            <tr>
                                <td><b style="color:#639a40;font-size:17px">Settings</b></td>
                                <td><label for="show_setting">Show</label> <input type="checkbox" id="show_setting" {{ $admingroup->show_setting == 'enable' ? 'checked' : '' }} name="show_setting" value="enable"></td>
                                <td></td>
                                <td><label for="edit_setting">Edit</label> <input type="checkbox" id="edit_setting" {{ $admingroup->edit_setting == 'enable' ? 'checked' : '' }} name="edit_setting" value="enable"></td>
                                <td></td>
                            </tr>

                    </tbody>
                </table>


                <div class="text-center">
                    <button type="submit" class="btn btn-info">{{ trans('backend.update') }}</button>&nbsp;
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
