<?php

namespace App\Http\Controllers\Admin;

use App\Model\AdminGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGroupController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_admingroup',['only' => 'index','show']);
        $this->middleware('Permission:create_admingroup',['only' => 'create','store']);
        $this->middleware('Permission:edit_admingroup',['only' => 'edit','update']);
        $this->middleware('Permission:delete_admingroup',['only' => 'destroy','delete']);
    }


    public function index()
    {
        $admingroup = AdminGroup::all();

        return view('Admin.pages.admin_groups.index' , compact('admingroup'));
    }

   
    public function create()
    {
        return view('Admin.pages.admin_groups.create');
    }


    public function store(Request $request)
    {
        $rules = [

            'name' => 'required|min:3|unique:admin_groups',

            'show_admin' => 'sometimes|nullable|in:enable,disable',
            'create_admin' => 'sometimes|nullable|in:enable,disable',
            'edit_admin' => 'sometimes|nullable|in:enable,disable',
            'delete_admin' => 'sometimes|nullable|in:enable,disable',

            // Admin Grou Colum
            'show_admingroup' => 'sometimes|nullable|in:enable,disable',
            'create_admingroup' => 'sometimes|nullable|in:enable,disable',
            'edit_admingroup' => 'sometimes|nullable|in:enable,disable',
            'delete_admingroup' => 'sometimes|nullable|in:enable,disable',

            // Category Colum
            'show_category' => 'sometimes|nullable|in:enable,disable',
            'create_category' => 'sometimes|nullable|in:enable,disable',
            'edit_category' => 'sometimes|nullable|in:enable,disable',
            'delete_category' => 'sometimes|nullable|in:enable,disable',

            // About Colum
            'show_about' => 'sometimes|nullable|in:enable,disable',
            'create_about' => 'sometimes|nullable|in:enable,disable',
            'edit_about' => 'sometimes|nullable|in:enable,disable',
            'delete_about' => 'sometimes|nullable|in:enable,disable',

            // Comment Colum
            'show_comment' => 'sometimes|nullable|in:enable,disable',
            'create_comment' => 'sometimes|nullable|in:enable,disable',
            'edit_comment' => 'sometimes|nullable|in:enable,disable',
            'delete_comment' => 'sometimes|nullable|in:enable,disable',

            // Comment Repy Colum
            'show_commentreply' => 'sometimes|nullable|in:enable,disable',
            'create_commentreply' => 'sometimes|nullable|in:enable,disable',
            'edit_commentreply' => 'sometimes|nullable|in:enable,disable',
            'delete_commentreply' => 'sometimes|nullable|in:enable,disable',


            // Message Colum
            'show_message' => 'sometimes|nullable|in:enable,disable',
            'create_message' => 'sometimes|nullable|in:enable,disable',
            'edit_message' => 'sometimes|nullable|in:enable,disable',
            'delete_message' => 'sometimes|nullable|in:enable,disable',


            // Posts Colum
            'show_post' => 'sometimes|nullable|in:enable,disable',
            'create_post' => 'sometimes|nullable|in:enable,disable',
            'edit_post' => 'sometimes|nullable|in:enable,disable',
            'delete_post' => 'sometimes|nullable|in:enable,disable',

            // Slider Colum
            'show_slider' => 'sometimes|nullable|in:enable,disable',
            'create_slider' => 'sometimes|nullable|in:enable,disable',
            'edit_slider' => 'sometimes|nullable|in:enable,disable',
            'delete_slider' => 'sometimes|nullable|in:enable,disable',

            // Tag Colum
            'show_tag' => 'sometimes|nullable|in:enable,disable',
            'create_tag' => 'sometimes|nullable|in:enable,disable',
            'edit_tag' => 'sometimes|nullable|in:enable,disable',
            'delete_tag' => 'sometimes|nullable|in:enable,disable',

            // User Colum
            'show_user' => 'sometimes|nullable|in:enable,disable',
            'create_user' => 'sometimes|nullable|in:enable,disable',
            'edit_user' => 'sometimes|nullable|in:enable,disable',
            'delete_user' => 'sometimes|nullable|in:enable,disable',

            // Setting Colum
            'show_setting' => 'sometimes|nullable|in:enable,disable',
            'edit_setting' => 'sometimes|nullable|in:enable,disable',
        ];

        $data = $this->validate($request,$rules,[],[]);

        

        AdminGroup::create($data);

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('admingroup.index');

    }

    

    public function edit(AdminGroup $admingroup)
    {
        return view('Admin.pages.admin_groups.edit' , compact('admingroup'));
    }

  
    public function update(Request $request, AdminGroup $admingroup)
    {
        
        $rules = [

            'name' => 'required|min:3|unique:admin_groups,name,'.$admingroup->id,

            'show_admin' => 'sometimes|nullable|in:enable,disable',
            'create_admin' => 'sometimes|nullable|in:enable,disable',
            'edit_admin' => 'sometimes|nullable|in:enable,disable',
            'delete_admin' => 'sometimes|nullable|in:enable,disable',

            // Admin Grou Colum
            'show_admingroup' => 'sometimes|nullable|in:enable,disable',
            'create_admingroup' => 'sometimes|nullable|in:enable,disable',
            'edit_admingroup' => 'sometimes|nullable|in:enable,disable',
            'delete_admingroup' => 'sometimes|nullable|in:enable,disable',

            // Category Colum
            'show_category' => 'sometimes|nullable|in:enable,disable',
            'create_category' => 'sometimes|nullable|in:enable,disable',
            'edit_category' => 'sometimes|nullable|in:enable,disable',
            'delete_category' => 'sometimes|nullable|in:enable,disable',

            // About Colum
            'show_about' => 'sometimes|nullable|in:enable,disable',
            'create_about' => 'sometimes|nullable|in:enable,disable',
            'edit_about' => 'sometimes|nullable|in:enable,disable',
            'delete_about' => 'sometimes|nullable|in:enable,disable',

            // Comment Colum
            'show_comment' => 'sometimes|nullable|in:enable,disable',
            'create_comment' => 'sometimes|nullable|in:enable,disable',
            'edit_comment' => 'sometimes|nullable|in:enable,disable',
            'delete_comment' => 'sometimes|nullable|in:enable,disable',

            // Comment Repy Colum
            'show_commentreply' => 'sometimes|nullable|in:enable,disable',
            'create_commentreply' => 'sometimes|nullable|in:enable,disable',
            'edit_commentreply' => 'sometimes|nullable|in:enable,disable',
            'delete_commentreply' => 'sometimes|nullable|in:enable,disable',


            // Message Colum
            'show_message' => 'sometimes|nullable|in:enable,disable',
            'create_message' => 'sometimes|nullable|in:enable,disable',
            'edit_message' => 'sometimes|nullable|in:enable,disable',
            'delete_message' => 'sometimes|nullable|in:enable,disable',


            // Posts Colum
            'show_post' => 'sometimes|nullable|in:enable,disable',
            'create_post' => 'sometimes|nullable|in:enable,disable',
            'edit_post' => 'sometimes|nullable|in:enable,disable',
            'delete_post' => 'sometimes|nullable|in:enable,disable',

            // Slider Colum
            'show_slider' => 'sometimes|nullable|in:enable,disable',
            'create_slider' => 'sometimes|nullable|in:enable,disable',
            'edit_slider' => 'sometimes|nullable|in:enable,disable',
            'delete_slider' => 'sometimes|nullable|in:enable,disable',

            // Tag Colum
            'show_tag' => 'sometimes|nullable|in:enable,disable',
            'create_tag' => 'sometimes|nullable|in:enable,disable',
            'edit_tag' => 'sometimes|nullable|in:enable,disable',
            'delete_tag' => 'sometimes|nullable|in:enable,disable',

            // User Colum
            'show_user' => 'sometimes|nullable|in:enable,disable',
            'create_user' => 'sometimes|nullable|in:enable,disable',
            'edit_user' => 'sometimes|nullable|in:enable,disable',
            'delete_user' => 'sometimes|nullable|in:enable,disable',

            // Setting Colum
            'show_setting' => 'sometimes|nullable|in:enable,disable',
            'edit_setting' => 'sometimes|nullable|in:enable,disable',
        ];

        $data = $this->validate($request,$rules,[],[]);

        $new_data = [];
        $new_data['name'] = $data['name'];
        foreach( $rules as $k => $v ){
            if( empty(request($k)) ){
                $new_data[$k] = 'disable';
            }else{
                $new_data[$k] = request($k);
            }
        }

        AdminGroup::where('id' , $admingroup->id)->update($new_data);

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('admingroup.index');
    }

    public function destroy(AdminGroup $admingroup)
    {
        $admingroup->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('admingroup.index');
    }
}
