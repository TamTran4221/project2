@extends('layout')
@section('layout')
<div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">

    <section>
        <div class="product flex flex-row mx-7">
            <div class="lg:flex hidden mt-8 gap-2 w-6/12">
                <div class="cartegory lg:block hidden">
                    <aside>
                        <div>
                            <h3 class="mb-5 mt-5 text-2xl ">Sản phẩm</h3>
                            <ul>
                                <li class="flex gap-4 items-center mb-3">
                                    <a href=""><img class="w-16 h-16" src="/template/layout/img/ke_tivi/tivi.jpg" alt=""></a>
                                    <div>
                                        <h4 class="text-xl product-title"><a href="">Camwood TV Shelves</a></h4>
                                        <strong>7,569,000 đ</strong>
                                    </div>
                                </li>
                                <li class="flex gap-4 items-center mb-3">
                                    <a href=""><img class="w-16 h-16" src="/template/layout/img/ke_tivi/tivi1.jpg" alt=""></a>
                                    <div>
                                        <h4 class="text-xl product-title"><a href="">Natural wood TV shelf KTV91</a>
                                        </h4>
                                        <strong>5,050,000 ₫</strong>
                                    </div>
                                </li>
                                <li class="flex gap-4 items-center mb-3">
                                    <a href=""><img class="w-16 h-16" src="/template/layout/img/ke_tivi/tivi2.jpg" alt=""></a>
                                    <div>
                                        <h4 class="text-xl product-title"><a href="">TV shelf for living room KTV96</a>
                                        </h4>
                                        <strong>4,759,000 ₫</strong>
                                    </div>
                                </li>
                                <li class="flex gap-4 items-center mb-3">
                                    <a href=""><img class="w-16 h-16" src="/template/layout/img/ke_tivi/tivi3.jpg" alt=""></a>
                                    <div>
                                        <h4 class="text-xl product-title"><a href="">Clove Wood TV Shelves</a></h4>
                                        <strong>7,564,000 ₫</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="product-description">
                <div class="lg:flex block flex-row">
                    <div class="product-image justify-center">
                        <img width="600" height="600" src="/template/layout/img/sofa/sofa2.jpg" alt="">
                    </div>
                    <div class="product-info lg:pr-12">
                        <div class="lg:flex hidden gap-4">
                            <div class=" mb-5 mt-5 text-2xl home uppercase"><a href="">Trang Chủ</a></div>
                            <div class="mb-5 mt-5 text-2xl">/</div>
                            <div class=" mb-5 mt-5 text-2xl uppercase">
                                Bàn ghế sofa
                            </div>
                        </div>
                        <div>
                            <h1 class="product-title entry-title text-2xl">Sofa SF32</h1>
                        </div>
                        <div class="price" style="font-weight: bold;">
                            <span>14,250,000&nbsp;<span>đ</span></span>
                        </div>
                        <div class="product-short-description">
                            <ul class="list-none hover:list-disc">
                                <li>Bộ ghế sofa SF32 mang kiểu dáng hiện đại, trẻ trung, tạo điểm nhấn nổi bật cho toàn bộ kiến trúc văn phòng làm việc thêm phong cách, lịch lãm.</li>
                                <li>Bộ ghế được bọc PVC cao cấp, gồm có 01 băng dài bề thế, 02 ghế đơn tiện nghi</li>
                                <li>Khung thép mạ sáng bóng ôm bo thân ghế ấn tượng, đẳng cấp</li>
                                <li>Chân ghế bằng kim loại mạ cao cấp chống rỉ sét, oxi hóa, thấm nước</li>
                            </ul>
                        </div>
                        <div class="product-count">
                            <label for="size">Số lượng</label>
                            <form action="#" class="flex flex-row">
                                <div class="qtyminus">-</div>
                                <input type="text" name="quantity" value="1" class="qty">
                                <div class="qtyplus">+</div>
                            </form>
                            <a href="#" class="round-black-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="">
            <h3 class="mb-5 mt-5 text-2xl">SẢN PHẨM TƯƠNG TỰ</h3>
        </div>
        <div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-3 gap-2 lg:ml-5 ml-1 relative">

            <div class="product_item">
                <a href="">
                    <div class="product_sofa "></div>
                </a>
                <a class="product_link" href="">
                    <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                </a>
                <div class="w-36 lg:mt-20 mt-2   mx-auto text-center">
                    <P class="text-xs opacity-60">SOFA</P>
                    <a class="link_sofa" href="">
                        <h4>Sofa SF108</h4>
                    </a>
                    <strong>13,576,000 đ</strong>
                </div>
            </div>
            <div class="product_item">
                <a href="">
                    <div class="product_sofa "></div>
                </a>
                <a class="product_link" href="">
                    <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                </a>
                <div class="w-36 lg:mt-20 mt-2   mx-auto text-center">
                    <P class="text-xs opacity-60">SOFA</P>
                    <a class="link_sofa" href="">
                        <h4>SF22</h4>
                    </a>
                    <strong>13,576,000 đ</strong>
                </div>
            </div>
            <div class="product_item">
                <a href="">
                    <div class="product_sofa "></div>
                </a>
                <a class="product_link" href="">
                    <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                </a>
                <div class="w-36 lg:mt-20 mt-2   mx-auto text-center">
                    <P class="text-xs opacity-60">SOFA</P>
                    <a class="link_sofa" href="">
                        <h4>Sofa SF33</h4>
                    </a>
                    <strong>13,576,000 đ</strong>
                </div>
            </div>
            <div class="product_item">
                <a href="">
                    <div class="product_sofa "></div>
                </a>
                <a class="product_link" href="">
                    <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                </a>
                <div class="w-36 lg:mt-20 mt-2   mx-auto text-center">
                    <P class="text-xs opacity-60">SOFA</P>
                    <a class="link_sofa" href="">
                        <h4>Sofa SF32</h4>
                    </a>
                    <strong>13,576,000 đ</strong>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection