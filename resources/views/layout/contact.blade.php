@extends('layout')
@section('layout')
<div class="content">
    <div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
        <div class="flex justify-center border-b-2 border-slate-300 pb-4">
            <h3 class="text-4xl     uppercase">CONTACT</h3>
        </div>
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
                    <input class="input-contact" type="text" placeholder="Name">
                    <input class="input-contact" type="email" placeholder="Email">
                    <input class="input-contact" type="text" placeholder="Phone number">
                    <textarea class="input-content" value="mesenger" placeholder="Messenger"></textarea>
                    <button class="button-contect">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection