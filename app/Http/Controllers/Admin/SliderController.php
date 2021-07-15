<?php

namespace App\Http\Controllers\Admin;

use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_slider',['only' => 'index','show']);
        $this->middleware('Permission:create_slider',['only' => 'create','store']);
        $this->middleware('Permission:edit_slider',['only' => 'edit','update']);
        $this->middleware('Permission:delete_slider',['only' => 'destroy','delete']);
    }


    public function index()
    {
        $sliders = Slider::all();

        return view('Admin.pages.sliders.index' , compact('sliders'));
    }

   
    public function create()
    {
        return view('Admin.pages.sliders.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'required|mimes:jpg,jpeg,png,gif'
        ]);

        $slider = new Slider;
        if( $request->image ){
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/sliders/' . $request->image->hashName());
            $slider->image = 'uploads/sliders/'.$request->image->hashName();
        }
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->created_by = adminurl()->email;
        $slider->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('sliders.index');
    }

    
    public function show(Slider $slider)
    {
        return view('Admin.pages.sliders.show' , compact('slider'));
    }

    public function edit(Slider $slider)
    {
        return view('Admin.pages.sliders.edit' , compact('slider'));
    }

  
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'mimes:jpg,jpeg,png,gif'
        ]);

        if( $request->image ){
            if( $slider->image != 'uploads/sliders/default.png' ){
                unlink($slider->image);
            }
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/sliders/' . $request->image->hashName());
            $slider->image = 'uploads/sliders/'.$request->image->hashName();
        }
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->created_by = adminurl()->email;
        $slider->save();

        session()->flash('success' , trans('backend.updated_successfully'));
        return redirect()->route('sliders.index');
    }

    public function destroy(Slider $slider)
    {
        if( $slider->image != 'uploads/sliders/default.png' ){
            unlink($slider->image);
        }
        $slider->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('abouts.index');
    }
}
