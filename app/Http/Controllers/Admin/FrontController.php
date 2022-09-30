<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class FrontController extends Controller
{
    public function index(){
        $data=Blog::all();
        $latest_blog=Blog::latest()->first();
        return view('welcome',compact('data','latest_blog'));

}

public function detail($id){
    $data=Blog::find($id);
    $categories =Category::all();

    return view('frontend.detail',compact('data','categories'));
}

}
