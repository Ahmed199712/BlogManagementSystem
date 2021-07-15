<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('Permission:show_category',['only' => 'index','show']);
        $this->middleware('Permission:create_category',['only' => 'create','store']);
        $this->middleware('Permission:edit_category',['only' => 'edit','update']);
        $this->middleware('Permission:delete_category',['only' => 'destroy','delete']);
    }
    
    public function index()
    {
        $categories = Category::orderBy('id' , 'DESC')->get();

        return view('Admin.pages.categories.index' , compact('categories'));
    }

    
    public function create()
    {
        return view('Admin.pages.categories.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->created_by = adminurl()->email;
        $category->save();

        session()->flash('success' , trans('backend.created_successfully'));
        return redirect()->route('categories.index');
    }


    
    public function edit(Category $category)
    {

        return view('Admin.pages.categories.edit' , compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories,name,'.$category->id
        ]);

        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->updated_by = adminurl()->email;

        if( !$category->isDirty() ){
            session()->flash('info' , 'There is no changes !');
            return redirect()->back();
        }else{
            $category->save();
            session()->flash('success' , trans('backend.updated_successfully'));
            return redirect()->route('categories.index');
        }
        

        
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success' , trans('backend.deleted_successfully'));
        return redirect()->route('categories.index');
    }
}
