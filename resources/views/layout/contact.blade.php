@extends('layout')
@section('layout')
<div class="content">
    <div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
        <div class="lg:flex ">
            <div class="content_1">
                <div class="content_1-text">
                    <h1 class="text-4xl"> GET IN TOUCH</h1>
                    <p class="font-semibold mt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <p class="mt-4">Um quist, a seque et audae. Namus aut voloriae. Ecesti volupta sinihil maxim hit quis dicid ut dolorer spiscip suntium eveniet hicatibus, omnit dignam ulparis aut odit, et expero tectiossi acitis aribus dis cus soluptur a dolo
                        incipis plam, e xpe enditatatur aut et volorpor aute repta non coreri dellaboratur acea praeritio blaut voluptio. Xerum quame re pe officae.</p>
                </div>
            </div>
            <div class="content_2">
                <div class="contact">
                    <input class="input-contact" type="text" placeholder="Họ và tên">
                    <input class="input-contact" type="email" placeholder="Email">
                    <input class="input-contact" type="text" placeholder="Số điện thoại">
                    <textarea class="input-content" value="mesenger" placeholder="Lời nhắn"></textarea>
                    <button class="button-contect justify-content-center">Gửi</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection