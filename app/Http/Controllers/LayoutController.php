<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home()
    {
        return view('layout.home', ['title'=> "Trang chủ"]);
    }
    public function about()
    {
        return view('layout.about',['title'=> "Giới thiệu"]);
    }
    public function news()
    {
        return view('layout.news',['title'=> "Tin tức"]);
    }
    public function contact()
    {
        return view('layout.contact',['title'=> "Liên hệ"]);
    }
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        dd($category);
        return view('layout.product');
    }
    public function sofa()
    {
        $product = Product::where('category_id',2)->get();
        $cate = Category::all();
        $pro = Product::where('category_id',1)->limit(4)->get();
        return view('layout.sofa',compact('product','pro','cate'),['title'=> "Sofa"]);
    }
    public function table()
    {
        $product = Product::where('category_id',3)->get();
        $pro = Product::where('category_id',2)->limit(4)->get();
        return view('layout.table',['title'=> "Bàn ghế"],compact('product','pro'));
    }
    public function tivi()
    {
        $product = Product::where('category_id',1)->get();
        $pro = Product::where('category_id',3)->limit(4)->get();
        return view('layout.ketivi',['title'=> "Kệ Tivi"], compact('product', 'pro'));
    }
    public function detail()
    {
        return view('layout.detail', ['title'=>"Trang chi tiết sản phẩm"]);
    }
}
