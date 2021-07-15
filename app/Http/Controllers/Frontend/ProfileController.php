<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\User;

class ProfileController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Frontend.profile.index');
    }

    public function updateProfile(Request $request)
    {
        $id = userurl()->id;   
        $user = User::where('id', $id)->first();
        
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6|confirmed',
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
        $user->save();

        session()->flash('success' , 'Profile has been updated successfully ...');
        return redirect()->back();
    }

    public function userLogout()
    {
        auth()->guard('web')->logout();

        session()->flash('success' , 'Profile has been updated successfully ...');
        return redirect()->route('frontend.index');
    }

    
}
