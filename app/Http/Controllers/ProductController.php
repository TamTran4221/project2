<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(
        Product $product,
        Category $category
    ){
        $this->product = $product;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->getDataIndex($i = 10);
        return view('admin.product.index', compact('products'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = $this->category->getAll();
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
<<<<<<< HEAD
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
           
            $file->move(public_path('uploads'),$fileName);
            $request->merge(['image'=>$fileName]);
        }
        Product::create($request->all());
        return redirect()->route('product.index')->with('success','Thêm mới sản phẩm thành công');
=======
        $this->product->add($request);
        return redirect()->route('product.index');
>>>>>>> 2ea2d36946036c4e651120a3ba52ad6c14266420
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->product->getProductByCatId($id);
        $this->category->getAll();
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
        try {
            $this->product->add($request, $id);
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
            $this->product->remove($id);
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
