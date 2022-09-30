<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        return view('backend.category.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            

        ]);
        $data=new Category();
        $data->title=$request->title;
        $data->save();
        return redirect()->route('admin.category.table')->with('msg','Data Inserted Successfully!');

    }
    public function table(){
        $data=Category::all();
        return view('backend.category.table',compact('data'));
    }

    public function edit($id)
    {
      $data = Category::find($id);
      return view('backend.category.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=Category::find($id);
        $data->title=$request->title;
        $data->save();
        return redirect()->route('admin.category.table');

    }
    public function delete($id)
    {
      $data = Category::find($id);
      $data->delete();
      return redirect()->route('admin.category.table');
    }

}
