<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Model\AdminGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_admin',['only' => 'index','show']);
        $this->middleware('Permission:create_admin',['only' => 'create','store']);
        $this->middleware('Permission:edit_admin',['only' => 'edit','update']);
        $this->middleware('Permission:delete_admin',['only' => 'destroy','delete']);
    }
    
    public function index()
    {
        $admins = Admin::where('group_id' ,'!=', NULL)->orderBy('id','DESC')->get();

        return view('Admin.pages.admins.index' , compact('admins'));
    }

   
    public function create()
    {
        $admingroup = AdminGroup::all();

        return view('Admin.pages.admins.create' , compact('admingroup'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = new Admin;
        if( $request->avatar ){
            Image::make($request->avatar)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/avatars/' . $request->avatar->hashName());
            $admin->avatar = 'uploads/avatars/'.$request->avatar->hashName();
            /*
                $image = $request->avatar;
                $new_image = time() . $image->getClientOriginalName();
                $image->move(public_path('uploads/avatars/'), $new_image);
                $admin->avatar = 'uploads/avatars/'.$new_image;
            */
        }
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->password = bcrypt($request->password);
        $admin->group_id = $request->group_id;
        $admin->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('admins.index');
    }

    
    public function show(Admin $admin)
    {
        $admingroup = AdminGroup::all();

        return view('Admin.pages.admins.show' , compact('admin','admingroup'));
    }

    public function edit(Admin $admin)
    {
        $admingroup = AdminGroup::all();

        return view('Admin.pages.admins.edit' , compact('admin','admingroup'));
    }

  
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:admins,email,'.$admin->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        if( $request->avatar ){
            if( $admin->avatar != 'uploads/avatars/default.png' ){
                unlink($admin->avatar);
            }
            Image::make($request->avatar)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/avatars/' . $request->avatar->hashName());
            $admin->avatar = 'uploads/avatars/'.$request->avatar->hashName();
        }
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        if( !empty($request->password) ){
            $admin->password = bcrypt($request->password);
        }
        $admin->group_id = $request->group_id;
        $admin->save();

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('admins.index');
    }

    public function destroy(Admin $admin)
    {
        if( $admin->avatar != 'uploads/avatars/default.png' ){
            unlink($admin->avatar);
        }

        
        $admin->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('admins.index');
    }
}
