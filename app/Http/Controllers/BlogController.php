<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin/blog.index', compact('blogs'), ['title'=> 'Quản lý blog']);
    }
    public function create()
    {
        return view('/admin/blog.add',['title'=>'Thêm mới blog']);
    }
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);
            $request->merge(['image'=>$fileName]);
        }
    //    dd($request);
        Blog::create($request->all());
        return redirect()->route('blog.index');
        
    }
    public function edit($id)
    {
        $cate = Blog::find($id);

        return view('/admin/blog.edit',compact('cate'),['title'=> 'Chỉnh sửa blog']);
    }
}
