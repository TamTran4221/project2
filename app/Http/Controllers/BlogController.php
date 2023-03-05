<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(2);
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
            $file->move(public_path('uploads-blog'),$fileName);
            $request->merge(['image'=>$fileName]);
        }
    //    dd($request);
        Blog::create($request->all());
        return redirect()->route('blog.index')->with('success','thêm mới Blog thành công');
        
    }
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('/admin/blog.edit',compact('blog'),['title'=> 'Chỉnh sửa blog']);
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        if($request->hasFile('file')){
            $file = $request->file;
            $file_name =  $file->getClientOriginalName();
            $file->move(public_path('uploads-blog'),$file_name);
        } else {
            $file_name = $blog->image;
        }
        
        $request->merge(['image'=>$file_name]);
        
        try {
            $blog->update($request->all());
            return redirect()->route('product.index');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
    public function destroy($id)
    {
        try {
            Blog::find($id)->delete();
            return redirect()->back();
         } catch (\Throwable $th) {
             //throw $th;
         }
    }
        
}
