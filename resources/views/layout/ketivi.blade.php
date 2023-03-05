@extends('layout')
@section('layout')
<div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
    <!-- content header -->
    <div class="flex justify-between lg:ml-0 ml-8">
        <div class="lg:flex hidden gap-4">
            <div class="text-2xl home uppercase"><a href="">trang chủ</a></div>
            <div class="text-2xl">/</div>
            <div class="text-2xl uppercase">
                KỆ TIVI
            </div>
        </div>
        <div class="lg:mx-0 mx-auto">
            <label class="text-lg lg:inline hidden" for="">Xem thứ tự 9 kết quả</label>
            <select class="select">
                <option value="">Thứ tự mặc định</option>
                <option value="">Theo thứ tự phổ biến</option>
                <option value="">thứ tự theo điểm đánh giá</option>
                <option value="">Thứ tự theo sản phẩm mới</option>
                <option value="">Theo thứ tự từ thấp đến cao</option>
                <option value="">Theo thứ tự cao đến thấp</option>
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
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="{{route('layout.table')}}">BÀN GHẾ</a></li>
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="{{route('layout.sofa')}}">BÀN GHẾ SOFA</a></li>
                    <li class="  border-b-2 border-solid p-2"><a class="category_link" href="{{route('layout.tivi')}}">KỆ TIVI</a></li>
                </ul>
            </div>
            <div>
                <h3 class="mb-5 mt-5 text-2xl ">SẢN PHẨM</h3>
                <ul>
                    @foreach ($pro as $value)
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="{{url('uploads')}}/{{$value->image}}" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">{{$value->name}}</a></h4>
                            <strong>{{$value->price}}</strong>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="product-sofa-table-tivi">
            <div class="grid lg:grid-cols-3 lg:gap-2 grid-cols-2">
                
                @foreach ($product as $value)
                <div class="product_item">
                    <a href="">
                        <div class="product_tivi "></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">KỆ TIVI</P>
                        <a class="link_sofa" href="">
                            <h4>{{$value->name}}</h4>
                        </a>
                        <strong>{{$value->price}}đ</strong>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection