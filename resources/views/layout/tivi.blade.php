@extends('layout')
@section('layout')
<div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
    <!-- content header -->
    <div class="flex justify-between lg:ml-0 ml-8">
        <div class="lg:flex hidden gap-4">
            <div class="text-2xl home uppercase"><a href="">HOME</a></div>
            <div class="text-2xl">/</div>
            <div class="text-2xl uppercase">
                TV SHELF
            </div>
        </div>
        <div class="lg:mx-0 mx-auto">
            <label class="text-lg lg:inline hidden" for="">See all 9 results</label>
            <select class="select">
                <option value="">Default order</option>
                <option value="">Popularity</option>
                <option value="">According to rating</option>
                <option value="">New product </option>
                <option value="">by price: high to low</option>
                <option value="">by price : low to high</option>
            </select>
        </div>
    </div>

    <!-- content body -->
    <div class="flex mt-8 gap-2">
        <div class="category lg:block hidden" style="max-width:24%">
            <div class="flex">
                <input class="input-category" type="text" placeholder="Search ...">
                <span class="input-category_icon">
                    <i class=" fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
            <div>
                <h3 class="mb-5 mt-5 text-2xl ">DANH MỤC SẢN PHẨM</h3>
                <ul>
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="table.html">BÀN GHẾ</a></li>
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="sofa.html">BÀN GHẾ SOFA</a></li>
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="tivi.html">KỆ TIVI</a></li>
                </ul>
            </div>
            <div>
                <h3 class="mb-5 mt-5 text-2xl ">PRODUCT</h3>
                <ul>
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="/template/layout//img/ke_tivi/tivi.jpg" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">Rosewood tv shelf</a></h4>
                            <strong>7,569,000 đ</strong>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="/template/layout//img/ke_tivi/tivi1.jpg" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">Natural wood TV shelf KTV91</a></h4>
                            <strong>5,050,000 ₫</strong>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="/template/layout//img/ke_tivi/tivi2.jpg" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">TV shelf for living room KTV96</a></h4>
                            <strong>4,759,000 ₫</strong>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="/template/layout//img/ke_tivi/tivi3.jpg" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">Xoan wooden dining table and chairs set</a></h4>
                            <strong>7,564,000 ₫</strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-sofa-table-tivi">
            <div class="grid lg:grid-cols-3 lg:gap-2 grid-cols-2">
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>High end tv shelf</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>Camwood TV Shelves</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>Clove Wood TV Shelves</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>Natural wood TV shelf KTV91</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>Wood TV Shelves</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>
                <div class="product_item">
                    <a href="sofa-detail.html">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">TV SHELF</P>
                        <a class="link_sofa" href="sofa-detail.html">
                            <h4>TV shelf for living room KTV96</h4>
                        </a>
                        <strong>13,576,000 đ</strong>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection