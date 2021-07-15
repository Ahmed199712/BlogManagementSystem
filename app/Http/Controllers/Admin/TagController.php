<?php

namespace App\Http\Controllers\Admin;

use App\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_tag',['only' => 'index','show']);
        $this->middleware('Permission:create_tag',['only' => 'create','store']);
        $this->middleware('Permission:edit_tag',['only' => 'edit','update']);
        $this->middleware('Permission:delete_tag',['only' => 'destroy','delete']);
    }


    public function index()
    {
        $tags = Tag::orderBy('id' , 'DESC')->get();

        return view('Admin.pages.tags.index' , compact('tags'));
    }

    
    public function create()
    {
        return view('Admin.pages.tags.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:tags'
        ]);

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->created_by = adminurl()->email;
        $tag->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->back();
        //return redirect()->route('tags.index');
    }


    
    public function edit(Tag $tag)
    {

        return view('Admin.pages.tags.edit' , compact('tag'));
    }

    
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|min:3|unique:tags,name,'.$tag->id
        ]);

        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->updated_by = adminurl()->email;

        if( !$tag->isDirty() ){
            session()->flash('info' , 'There is no changes !');
            return redirect()->back();
        }else{
            $tag->save();
            session()->flash('success' , trans('backend.updated_successfully'));
            return redirect()->back();
            //return redirect()->route('tags.index');
        }
        

        
    }

    
    public function destroy(Tag $tag)
    {
        $tag->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('tags.index');
    }
}
