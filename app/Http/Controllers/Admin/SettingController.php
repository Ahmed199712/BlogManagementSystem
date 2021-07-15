<?php

namespace App\Http\Controllers\Admin;

use App\Model\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_setting',['only' => 'index']);
        $this->middleware('Permission:edit_setting',['only' => 'update']);
    }
    
    public function index()
    {
        $settings = Setting::first();

        return view('Admin.pages.settings.index' , compact('settings'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'site_name' => 'required|min:3',
            'site_email' => 'required|email',
        ]);

        $setting = Setting::first();
        if( $request->site_logo ){
            if( $setting->site_logo != 'uploads/logos/default.png' ){
                unlink($setting->site_logo);
            }
            Image::make($request->site_logo)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/logos/' . $request->site_logo->hashName());
            $setting->site_logo = 'uploads/logos/'.$request->site_logo->hashName();
        }
        $setting->site_name = $request->site_name;
        $setting->site_desc = $request->site_desc;
        $setting->site_email = $request->site_email;
        $setting->site_phone = $request->site_phone;
        $setting->site_address = $request->site_address;
        $setting->facebook = $request->facebook;
        $setting->youtube = $request->youtube;
        $setting->twitter = $request->twitter;
        $setting->website_status = $request->website_status;
        $setting->comments_status = $request->comments_status;
        $setting->register_status = $request->register_status;
        $setting->save();

        session()->flash('success' , 'Settings has been updated successfully ...');
        return redirect()->back();
    }

 
}
