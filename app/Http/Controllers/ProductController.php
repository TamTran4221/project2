<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        dd($products);
        return view('admin/product.index', compact('products'),['title'=>'danh sách sản phẩm']);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::where('status',1)->get();
        return view('admin/product.add',compact('cate'),['title'=> 'thêm mới sản phẩm']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
           
            $file->move(public_path('uploads'),$fileName);
            $request->merge(['image'=>$fileName]);
        }
        Product::create($request->all());
        return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $cate = Category::where('status',1)->get();
        return view('admin/product.edit',compact('product','cate'), ['title' =>'Chỉnh Sửa sản phẩm']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasFile('file')){
            $file = $request->file;
            $file_name =  $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        } else {
            $file_name = $product->image;
        }
        
        $request->merge(['image'=>$file_name]);
        
        try {
            $product->update($request->all());
            return redirect()->route('product.index');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::find($id)->delete();
            return redirect()->back();
         } catch (\Throwable $th) {
             //throw $th;
         }
    }
}
