<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Admin;

class ProfileController extends Controller
{

    
    public function index()
    {
        return view('Admin.pages.profile.index');
    }

    public function update(Request $request)
    {
        $id = adminurl()->id;   
        $admin = Admin::where('id', $id)->first();
        
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
        $admin->save();

        session()->flash('success' , 'Profile has been updated successfully ...');
        return redirect()->back();

    }


}
