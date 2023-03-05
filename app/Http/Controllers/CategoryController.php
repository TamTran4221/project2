<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $cates = Category::orderBy('created_at','DESC')->paginate(5)->withQueryString();
        return view('/admin/category.index',compact('cates'),['title'=>'Danh sách danh mục']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/category.add',['title'=>'Thêm mới danh mục']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = Category::create($request->all());
        return redirect()->route('category.index')->with('success','Thêm mới danh mục thành công');
    }
    

    /**
=======
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('layout.', [
            'products' => $products,
            'category' => $categories
        ]);
    }

    /**
>>>>>>> 2ea2d36946036c4e651120a3ba52ad6c14266420
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $category = Category::where('id', $id)->first();
        $products = $category->products()->orderBy('created_at')->paginate(12);
        return view('category.product', [
            'products' => $products,
            'category' => $category,
            'list_categories' => $categories
        ]);
    }
}
