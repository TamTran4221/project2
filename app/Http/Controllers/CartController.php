<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    private $product;

    public function __construct(
        Product $product
    ){
        $this->product = $product;
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $id = request()->cart_id;
        if ($id) {

        } else {
            $proId = request()->pro_id;
            $cusId = request()->cus_id;
            $product = $this->product->getProductById($proId);
            dd($product);
        }
    }
}
