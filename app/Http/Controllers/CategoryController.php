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
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('layout.', [
            'products' => $products,
            'category' => $categories
        ]);
    }

    /**
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
