@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
    <div class="flex justify-center h-screen">
        <!-- LEFT MENU -->
        <div class="w-1/5 pt-16 h-full hidden xl:flex flex-col fixed top-0 left-0 shadow-md overflow-y-scroll">
            <ul class="p-4 ">
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Nguyễn Văn Vấn</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Friends</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/landing-page.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Pages</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/market.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Market</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/group.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Groups</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Nguyễn Văn Vấn</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Friends</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/landing-page.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Pages</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/market.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Market</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/group.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Groups</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Nguyễn Văn Vấn</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Friends</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/landing-page.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Pages</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/market.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Market</span>
                    </a>
                </li>
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/group.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold block">Groups</span>
                    </a>
                </li> 
                <li class=" menu_show" >
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="show_more_menu"> 
                        <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                            <i class='bx bx-chevron-down'></i>
                        </span>
                        <span class="font-semibold block" > Show More</span></span>
                    </a>
                </li> 
                <li class="hidden menu_hidden">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="hidden_more_menu"> 
                        <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                            <i class='bx bx-chevron-down'></i>
                        </span>
                        <span class="font-semibold block" > Hidden Away</span></span>
                    </a>
                </li> 
                <li class=" border-b border-gray-300 dark:border-dark-third mt-6">
                </li> 
            </ul>
            <div class="flex justify-between items-center px-4 h-4 group">
                <span class="font-semibold text-gray-500 text-lg dark:text-dark-txt">Your Shortcuts</span>
                <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                rounded-md hidden group-hover:inline-block">Edit</span>
            </div>
            <ul class="p-4">
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/f8_icon.png') }}" alt="" class="w-10 h-10 rounded-md">
                        <span class="font-semibold block text-md">F8 Học Lập Trình Để Đi Làm</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/congdong.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                        <span class="font-semibold block text-md">Cộng đồng Front-end(HTML/CSS/JS) Việt Nam</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/chiendich.png') }}" alt="" class="w-10 h-10 rounded-md">
                        <span class="font-semibold block text-md">Chiến Dịch Gây Quỹ</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/kiniem.png') }}" alt="" class="w-10 h-10 rounded-md">
                        <span class="font-semibold block text-md">Kỉ Niệm</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third"> 
                        <img src="{{ asset('image/suckhoe.png') }}" alt="" class="w-10 h-10 rounded-md">
                        <span class="font-semibold block text-md">Sức Khỏe Cảm Xúc</span>
                    </a>
                </li> 
            </ul>
            <div class="mt-auto p-6 text-sm text-gray-500 dark:text-dark-txt">
                <a href="">Privacy</a>
                <span>.</span>
                <a href="">Terms</a>
                <span>.</span>
                <a href="">Advertising</a>
                <span>.</span>
                <a href="">Cookies</a>
                <span>.</span>
                <a href="">Ad choices</a>
                <span>.</span>
                <a href="">More</a>
                <span>.</span>
                <a href="">Vấn Nguyễn 2021</a>
            </div>
        </div>
        <!--  END LEFT MENU -->
        <!-- MID CONTENT -->
        <div class="w-full lg:w-2/3 xl:w-2/5 pt-32 lg:pt-16 px-2 bg-green-400">

        </div>
        <!-- END MID CONTENT-->
        <!-- RIGHT MENU -->
        <div class="w-1/5 pt-16 h-full hidden xl:flex flex-col  fixed top-0 right-0 bg-blue-200">

        </div>
        <!-- eND RIGHT MENU -->
    </div>
<!--  END MAIN CONTENT -->
@endsection
