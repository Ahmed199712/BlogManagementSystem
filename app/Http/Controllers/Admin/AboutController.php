<?php

namespace App\Http\Controllers\Admin;

use App\Model\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_about',['only' => 'index','show']);
        $this->middleware('Permission:create_about',['only' => 'create','store']);
        $this->middleware('Permission:edit_about',['only' => 'edit','update']);
        $this->middleware('Permission:delete_about',['only' => 'destroy','delete']);
    }


    public function index()
    {
        $abouts = About::all();

        return view('Admin.pages.abouts.index' , compact('abouts'));
    }

   
    public function create()
    {
        return view('Admin.pages.abouts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'required|mimes:jpg,jpeg,png,gif'
        ]);

        $about = new About;
        if( $request->image ){
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/abouts/' . $request->image->hashName());
            $about->image = 'uploads/abouts/'.$request->image->hashName();
        }
        $about->title = $request->title;
        $about->content = $request->content;
        $about->facebook = $request->facebook;
        $about->twitter = $request->twitter;
        $about->google = $request->google;
        $about->youtube = $request->youtube;
        $about->website = $request->website;
        $about->created_by = adminurl()->email;
        $about->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('abouts.index');
    }

    
    public function show(About $about)
    {
        return view('Admin.pages.abouts.show' , compact('about'));
    }

    public function edit(About $about)
    {
        return view('Admin.pages.abouts.edit' , compact('about'));
    }

  
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'mimes:jpg,jpeg,png,gif'
        ]);

        if( $request->image ){
            if( $about->image != 'uploads/abouts/default.png' ){
                unlink($about->image);
            }
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/abouts/' . $request->image->hashName());
            $about->image = 'uploads/abouts/'.$request->image->hashName();
        }
        $about->title = $request->title;
        $about->content = $request->content;
        $about->facebook = $request->facebook;
        $about->twitter = $request->twitter;
        $about->google = $request->google;
        $about->youtube = $request->youtube;
        $about->website = $request->website;
        $about->created_by = adminurl()->email;
        $about->save();

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('abouts.index');
    }

    public function destroy(About $about)
    {
        if( $about->image != 'uploads/abouts/default.png' ){
            unlink($about->image);
        }
        $about->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('abouts.index');
    }
}
