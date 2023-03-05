<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
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
        Blog::create($request->all());
        return redirect()->route('blog.index');
        
    }
    public function edit($id)
    {
        $cate = Blog::find($id);

        return view('/admin/blog.edit',compact('cate'),['title'=> 'Chỉnh sửa blog']);
    }
}
