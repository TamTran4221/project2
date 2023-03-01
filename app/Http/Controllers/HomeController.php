<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $products2 = $this->product->getProductByCatId(2);
        $products1 = $this->product->getProductByCatId(1);
        $products3 = $this->product->getProductByCatId(3);
        return view('layout.home', compact('products1','products2','products3'));
    }
}
