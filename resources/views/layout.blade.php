<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/template/layout/css/style.css">
    <link rel="stylesheet" href="/template/layout/css/contact.css">
    <link rel="stylesheet" href="/template/layout/css/news.css">
    <link rel="stylesheet" href="/template/layout/css/sofa_table_tivi.css">
    <link rel="stylesheet" href="/template/layout/css/detail.css">
    <link rel="stylesheet" href="/template/layout/css/fontawesome-free-6.2.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <title>{{$title}}</title>
</head>

<body>
    <header class="header js-header">
        <nav class="flex justify-between items-center bg-zinc-100 h-24">
            <label for="nav_mobile" class="lg:hidden block text-2xl ml-7 mr-16 menu">
                <i class="fa-solid fa-bars"></i>
            </label>
            <div class="lg:hidden block">
                <input type="checkbox" class="nav_mobile_check hidden" id="nav_mobile">
                <label for="nav_mobile" class="over fixed bg-opacity-20 bg-slate-600 top-0 right-0 bottom-0  left-0 z-10">
                <label for="nav_mobile">
                    <i class="fa-solid fa-xmark top-4 right-7 text-4xl absolute"></i>
                </label>
                </label>
                <div class="nav_mobile1 fixed top-0 left-0 bottom-0 w-80 max-w-full bg-white z-20 -translate-x-80">
                    <div class="relative left-6 mb-5">
                        <input class="rounded-2xl focus:outline-none w-56 h-8 mt-11 p-4 pb-5 f bg-zinc-200" type="text" placeholder="search...">
                        <i class="absolute right-28 top-14 fa-solid fa-magnifying-glass"></i>
                    </div>
                    <ul class="ml-6">
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.about')}}">GI???I THI???U</a></li>
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.table')}}">B??N GH???</a></li>
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.sofa')}}"></a>SOFA</li>                     
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.tivi')}}">K??? TIVI</a></li>
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.news')}}">TIN T???C</a></li>
                        <li class="pt-4 pb-4 border-t flex items-center"><a href="{{route('layout.contact')}}">LI??N H???</a></li>
                        <li class="pt-4 pb-4 border-t flex items-center">????NG NH???P</li>
                        <li class="pt-4 pb-4 border-t flex items-center">GI??? H??NG</li>
                        <li class="pt-4 pb-4 border-t flex items-center"></li>
                    </ul>
                </div>
            </div>
            <div class="relative left-14 hidden lg:block">
                <input class="rounded-2xl focus:outline-none w-80 h-8  p-4 pb-5 f bg-zinc-200" type="text" placeholder="search...">
                <i class="absolute right-3 top-2.5 fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="w-52 h-14 lg:mr-32 mr-14">
                <a href=""><img src="/template/layout/img/logo/durable2.png" alt="logo-mona-furniture-14" class="w-full h-full"></a>
            </div>
            <div class="flex lg:mr-14 mr-6 ">
                <div class="hover:text-amber-600 relative before:content-[''] before:h-5 before:border-l-2 before:absolute before:right-0 before:border-gray-400 before:translate-y-1 mr-1 lg:block hidden">
                    <button class="hover:text-amber-600 text-lg mr-2 text-zinc-500 login-js" href="">????NG NH???P</button>

                </div>
                <div class="hover:text-amber-600 flex gap-1 product">
                    <a class="hover:text-amber-600 text-lg lg:mr-1 text-zinc-500 lg:block hidden" href="">GI??? H??NG</a>
                    <i class="fa-solid fa-cart-plus lg:text-2xl text-2xl"></i>
                    <div class="product_box">no us product</div>
                </div>
            </div>
        </nav>
        <div class=" gap-10 justify-center p-5 lg:flex hidden">
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.about')}}">GI???I THI???U</a>
            </div>
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.table')}}">B??N GH???</a>
            </div>
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.sofa')}}">B??N GH??? SOFA</a>
            </div>
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.tivi')}}">K??? TIVI</a>
            </div>
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.news')}}">TIN T???C</a>
            </div>
            <div class="hover:text-amber-600 ">
                <a href="{{route('layout.contact')}}">LI??N H???</a>
            </div>
        </div>
    </header>
    @yield('layout')
    <footer class="footer">
        <div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14 ">
            <div class="lg:flex justify-between ">
                <div class="footer_list ">
                    <h2 class="text-2xl font-semibold leading-9 ml-4 ">??I???U H?????NG</h2>

                    <ul class="mt-5 ">
                        <li class="text-xl mt-3 footer_list-link "><a href="{{route('home')}} ">TRANG CH???</a> </li>
                        <li class="text-xl mt-3 footer_list-link "><a href="{{route('layout.about')}} ">GI???I THI???U</a> </li>
                        <li class="text-xl mt-3 footer_list-link "><a href=" ">S???N PH???M</a> </li>
                        <li class="text-xl mt-3 footer_list-link "><a href="{{route('layout.news')}} ">??I???M TIN H???U ??CH</a> </li>
                        <li class="text-xl mt-3 footer_list-link "><a href="{{route('layout.contact')}} ">LI??N H???</a> </li>
                    </ul>
                </div>
                <div class="text-center info_footer lg:mt-0 mt-8">
                    <div class="w-52 h-14 mx-auto">
                        <img src="/template/layout/img/logo/durable2.png " alt="logo-durable " class="w-full h-full ">
                    </div>
                    <p class="text-base mt-6 ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet ....</p>
                    <div class="mt-6 ">
                        <input class="input_info " type="email " placeholder="Email ... ">
                        <div class="button_footer flex justify-center items-center mt-8">
                            <button>????NG K??</button>
                        </div>
                    </div>

                </div>
                <div class="footer_list-info ">
                    <h2 class="text-2xl font-semibold leading-9 ml-4 ">LI??N H??? </h2>
                    <div class="flex mt-5">
                        <span class="text-yellow-400 mr-1">A</span>
                        <h3>:319 c16 Ly Thuong Kiet, ward 15, District 11, Tp.HCM</h3>
                    </div>
                    <div class="flex mt-5">
                        <span class="text-yellow-400 mr-1">T</span>
                        <h3>: 0126 922 0162</h3>
                    </div>
                    <div class="flex mt-5">
                        <span class="text-yellow-400 mr-1">E</span>
                        <div>
                            <h3>: monasofa@gmail.com</h3>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal js_modal">
        <div class="modal_container js-modal_container">
            <div class="modal_close js_modal-close"><i class="fa-solid fa-xmark"></i></div>
            <div class="modal_content">
                <header class="modal_header">
                    ????ng nh???p
                </header>
                <form action="" method="get">
                    <div class="modal_body">

                        <label for="" class="modal_label">T??i kho???n ho???c ?????a ch??? email *</label>
                        <input required class="modal_input" type="email" placeholder="Email ...">
                        <label for="" class="modal_label">M???t kh???u *</label>
                        <input required class="modal_input" type="password" placeholder="password">
                        <button id="login">Login</button>
                        <input type="checkbox" class="modal_check">
                        <label for="">Nh??? m???t kh???u</label>

                    </div>
                    <footer class="flex justify-between">
                        <a class="modal_footer" href="">Qu??n m???t kh???u?</a>
                        <p class="modal_signup" href="">B???n ch??a c?? t??i kho???n?</p>
                    </footer>
                </form>

            </div>
        </div>

    </div>

    <!-- ????ng k?? -->
    <div class="modal-signup js_modal-signup">
        <div class="modal_container-signup js-modal_container-signup">
            <div class="modal_close-signup js_modal-close-signup"><i class="fa-solid fa-xmark"></i></div>
            <div class="modal_content-signup">
                <header class="modal_header-signup">
                    ????ng k??
                </header>
                <form action="" method="get">
                    <div class="modal_body-signup">

                        <label for="" class="modal_label-signup">T??i kho???n ho???c ?????a ch??? email *</label>
                        <input required class="modal_input-signup" type="email" placeholder="Email ...">
                        <label for="" class="modal_label-signup">M???t kh???u *</label>
                        <input required class="modal_input-signup" type="password" placeholder="Password">
                        <label for="" class="modal_label-signup">Nh???p l???i m???t kh???u *</label>
                        <input required class="modal_input-signup" type="password" placeholder="confirm password">
                        <button id="signup">????ng k??</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="{{url('template/layout/js')}}/jquery.min.js"></script>
<script src="{{url('template/layout/js')}}/main.js"></script>
<script src="{{url('template/layout/js')}}/custom.js"></script>
</html>