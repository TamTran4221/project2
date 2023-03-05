@extends('layout')
@section('layout')
<div class="text-center text-4xl mt-6">MONA MEDIA</div>
<div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
    <div class="h-72 leading-tight bg-cover bg-no-repeat" style="background-image: url(/template/layout/img/gioi_thieu.jpg);">
    </div>
    <div class="lg:flex block">
        <div class="text-center lg:w-2/6 w-full">
            <div class="text_content">
                <div class="icon-inner">
                    <i class="fa-solid fa-address-book"></i>
                </div>
                <h3 class="text-2xl">Mona Media</h3>
                <p class="mt-3">319 c16 Ly Thuong Kiet, District 11</p>
                <p class="mt-3"> residential areas Thuan Viet, TP.HCM</p>
                <p class="mt-3">Crossroads Bắc Hải – Ly Thương Kiet</p>
            </div>

            <button class="button">CLICK ME!</button>
        </div>
        <div class="text-center lg:w-2/6 w-full">
            <div class="text_content">
                <div class="icon-inner">
                    <i class="fa-solid fa-mobile"></i>
                </div>
                <h3 class="text-2xl">PHONE</h3>
                <p class="mt-10 mb-6">0126 922 0162 </p>
                <p>skype: demonhunterp</p>
            </div>
            <button class="button">CLICK ME!</button>
        </div>
        <div class="text-center lg:w-2/6 w-full">
            <div class="text_content">
                <div class="icon-inner">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <h3 class="text-2xl">EMAIL</h3>
                <h3> monasofa@gmail.com</h3>
            </div>
            <button class="button">CLICK ME!</button>
        </div>
    </div>
</div>
@endsection
