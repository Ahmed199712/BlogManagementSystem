<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_user',['only' => 'index','show']);
        $this->middleware('Permission:create_user',['only' => 'create','store']);
        $this->middleware('Permission:edit_user',['only' => 'edit','update']);
        $this->middleware('Permission:delete_user',['only' => 'destroy','delete']);
    }

    public function index()
    {
        $users = User::all();

        return view('Admin.pages.users.index' , compact('users'));
    }

   
    public function create()
    {
        return view('Admin.pages.users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User;
        if( $request->avatar ){
            Image::make($request->avatar)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/users/' . $request->avatar->hashName());
            $user->avatar = 'uploads/users/'.$request->avatar->hashName();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->created_by = adminurl()->email;
        $user->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('users.index');
    }

    
    public function show(User $user)
    {
        return view('Admin.pages.users.show' , compact('user'));
    }

    public function edit(User $user)
    {
        return view('Admin.pages.users.edit' , compact('user'));
    }

  
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$user->id,
            
        ]);

        if( $request->avatar ){
            if( $user->avatar != 'uploads/users/default.png' ){
                unlink($user->avatar);
            }
            Image::make($request->avatar)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/users/' . $request->avatar->hashName());
            $user->avatar = 'uploads/users/'.$request->avatar->hashName();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if( !empty($request->password) ){
            $user->password = bcrypt($request->password);
        }
        $user->updated_by = adminurl()->email;
        $user->save();

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        if( $user->avatar != 'uploads/users/default.png' ){
            unlink($user->avatar);
        }
        $user->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('users.index');
    }
}
