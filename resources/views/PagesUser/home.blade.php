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
                    <img src="{{ asset('image/watch.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Watch</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/game.webp') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Play Game</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/history.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Recent Activity</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/weath.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Weather </span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/tools.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Tools</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Notebook.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Notebook</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/FAQ.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">FAQ</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Settings.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Settings</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Shield.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Shield</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Bank.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Bank Connect</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Credit.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Checkout</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/suckhoe.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Emotional Health  </span>
                </a>
            </li>
            <li class=" menu_show">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="show_more_menu">
                    <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                        <i class='bx bx-chevron-down'></i>
                    </span>
                    <span class="font-semibold block"> Show More</span></span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="hidden_more_menu">
                    <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                        <i class='bx bx-chevron-down'></i>
                    </span>
                    <span class="font-semibold block"> Hidden Away</span></span>
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
                    <img src="{{ asset('image/bg_vku.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">Đại học Công Nghệ Thông Tin & Truyền Thông Việt - Hàn</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/bg-dannang.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">Tin Nhanh Đà Nẵng</span>
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
    <div class="w-full lg:w-2/3 xl:w-2/5 pt-32 lg:pt-16 px-2 ">
        <!-- STORY -->
        <div class="relative flex space-x-2 pt-4">
            <div class="w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden flex flex-col group cursor-pointer">
                <div class="h-4/6 overflow-hidden">
                    <img src="{{ asset('image/story-1.png') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                </div>
                <div class="flex-1 relative flex items-center justify-center pb-2 text-center
                leading-none dark:bg-dark-second dark:text-dark-txt">
                    <span class="font-semibold">
                        Create a <br> Story
                    </span>
                    <div class=" w-10 h-10 rounded-full bg-blue-500 text-white grid place-items-center text-2xl border-4 border-white dark:border-dark-second absolute
                    -top-5 left-1/2 transform -translate-x-1/2">
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden">
                <div class="relative h-full group cursor-pointer">
                    <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full" alt="">
                    <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                    <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white"> 
                        Your Story
                    </span>
                    <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                         <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                    </div>
                </div>
            </div>
            <div class="w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden">
                <div class="relative h-full group cursor-pointer">
                    <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full" alt="">
                    <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                    <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white"> 
                        Your Story
                    </span>
                    <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                         <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                    </div>
                </div>
            </div>
            
            <div class=" hidden md:inline-block w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden">
                <div class="relative h-full group cursor-pointer">
                    <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full" alt="">
                    <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                    <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white"> 
                        Your Story
                    </span>
                    <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                         <img src="{{ asset('image/logo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                    </div>
                </div>
            </div>
            <div class=" hidden md:inline-block w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden">
                <div class="relative h-full group cursor-pointer">
                    <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full" alt="">
                    <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                    <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white"> 
                        Your Story
                    </span>
                    <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                         <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                    </div>
                </div>
            </div>
            <div class="w-12 h-12 rounded-full hidden lg:grid place-items-center text-2xl bg-white absolute -right-6 top-1/2 transform -translate-y-1/2 border border-gray-200
            cursor-pointer hover:bg-gray-100 shadow-md text-gray-500 dark:bg-dark-third dark:text-dark-txt dark:border-dark-third">
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </div>
        <!--  END STORY-->
        <!-- POST FORM -->
        <div class="px-4 mt-4 shadow-md rounded-lg bg-white dark:bg-dark-second">
            <div class="p-2 border-b border-gray-300 dark:border-dark-third flex space-x-4">
                <img src="{{ asset('image/story-1.png') }}" alt="" class="rounded-full w-10 h-10 ">
                <div id="input_post" class="flex-1 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-start pl-4 cursor-pointer dark:bg-dark-third dark:text-dark-txt text-gray-500 text-lg">
                    <span class="">
                        What's on your mind, Van?
                    </span>
                </div>
            </div>
            <div class="p-2 flex">
                <div class="w-1/3 flex space-x-2 justify-center items-center hover:bg-gray-100
                dark:hover:bg-dark-third text-xl  sm:text-3xl py-2 rounded-lg cursor-pointer text-red-500">
                <i class='bx bxs-video-plus'></i>
                <span class="text-xs sm:text-sm font-semibold text-gray-500 dark:text-dark-txt">Live video </span>
                </div>
                <div class="w-1/3 flex space-x-2 justify-center items-center hover:bg-gray-100
                dark:hover:bg-dark-third text-xl  sm:text-3xl py-2 rounded-lg cursor-pointer text-yellow-500">
                <i class='bx bx-images'></i>
                <span class="text-xs sm:text-sm font-semibold text-gray-500 dark:text-dark-txt">Image/Video </span>
                </div>
                <div class="w-1/3 flex space-x-2 justify-center items-center hover:bg-gray-100
                dark:hover:bg-dark-third text-xl  sm:text-3xl py-2 rounded-lg cursor-pointer text-blue-500">
                <i class='bx bx-happy-alt'></i>
                <span class="text-xs sm:text-sm font-semibold text-gray-500 dark:text-dark-txt">Emotion/Activate </span>
                </div>
            </div>
        </div>
        <!-- END POST FORM -->

    </div>
    <!-- END MID CONTENT-->
    <!-- RIGHT MENU -->
    <div class="w-1/5 pt-16 h-full hidden xl:flex flex-col  fixed top-0 right-0  ">
        <div class="h-full  overflow-y-scroll overflow-x-auto">
            <div class="p-3 bg-white rounded-lg mr-2 max-h-64 ">
                <div class="flex justify-between items-center  pt-4">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-4 h-4 m-2">
                        <span class="font-semibold text-gray-800 text-base dark:text-dark-txt"> Friend requests</span>
                    </div>
                    <button class="relative  btn_friend">
                        <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2 rounded-xl ">
                            <i class='bx bx-dots-horizontal-rounded w-4 h-4'></i>
                        </span>
                        <div class=" box_friend absolute right-0 w-80 top-7 bg-white shadow-2xl rounded-lg overflow-hidden p-3 hidden group-focus:block">
                            <div class="p-2 hover:bg-gray-300 rounded-xl" >
                                <a href="http://127.0.0.1:8000/" class=" flex  items-center">
                                    <span class="w-10 h-10 grid place-items-center text-xl bg-gray-200
                                        dark:hover:bg-dark-third rounded-full cursor-pointer">
                                        <i class='bx bxs-x-square'></i>
                                    </span>
                                    <span  class="text-base ml-4">
                                        Hidden friend requests
                                    </span>
                                </a>
                            </div>
                            <div class="p-2 hover:bg-gray-300 rounded-xl">
                                <a href="" class=" flex  items-center">
                                    <span class="w-10 h-10 grid place-items-center text-xl bg-gray-200
                                    dark:hover:bg-dark-third rounded-full cursor-pointer">
                                        <i class='bx bxs-group'></i>
                                    </span>
                                    <span class="text-base ml-4">
                                        Hidden friend requests
                                    </span>
                                </a>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="my-2">
                    <a href="#" class="flex items-center space-x-4 p-2 hover:bg-gray-200
                dark:bg-dark-third rounded-lg transition-all">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                        <div class="flex-1 h-full">
                            <div class="dark:text-dark-txt">
                                <span class="font-semibold">Hải Ba Đông</span>
                                <span class="float-right"> 6 Day</span>
                            </div>
                            <div class="flex space-x-2 mt-2">
                                <div class="w-1/2 bg-blue-500 cursor-pointer py-1 text-center
                            font-semibold text-white rounded-lg">
                                    Confirm
                                </div>
                                <div class="w-1/2 bg-gray-300 cursor-pointer py-1 text-center
                            font-semibold text-black rounded-lg">
                                    Delete
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-2">
                    <a href="#" class="flex items-center space-x-4 p-2 hover:bg-gray-200
                dark:bg-dark-third rounded-lg transition-all">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                        <div class="flex-1 h-full">
                            <div class="dark:text-dark-txt">
                                <span class="font-semibold">Tiêu Viêm</span>
                                <span class="float-right"> 6Day</span>
                            </div>
                            <div class="flex space-x-2 mt-2">
                                <div class="w-1/2 bg-blue-500 cursor-pointer py-1 text-center
                            font-semibold text-white rounded-lg">
                                    Confirm
                                </div>
                                <div class="w-1/2 bg-gray-300 cursor-pointer py-1 text-center
                            font-semibold text-black rounded-lg">
                                    Delete
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="border-b border-gray-200 dark:border-dark-third mt-6"></div>
            <!-- CONTACTS -->
            <div class="flex justify-between items-center px-4 pt-4 text-gray-500
            dark:text-dark-txt">
                <span class="font-semibold text-lg">Contacts</span>
                <div class="flex space-x-1">
                    <div class="w-8 h-8 grid place-items-center text-xl hover:bg-gray-200
                    dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-search '></i>
                    </div>
                    <div class="w-8 h-8 grid place-items-center text-xl hover:bg-gray-200
                    dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
            </div>
            <ul class="pt-2  ">
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Đường Tam</span>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="border-b border-gray-200 dark:border-dark-third mt-6"></div>
            <div class="flex justify-between items-center px-4 pt-4 text-gray-500
            dark:text-dark-txt">
                <span class="font-semibold text-lg">Group chat</span>
            </div>
            <ul class="pt-2  ">
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Trí tuệ nhân tạo</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Chuyên Đề Drone</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 p-2 hover:bg-gray-200
                    dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <span class="font-semibold">Lập Trình Website</span>
                        </div>
                    </div>
                </li>
                <li class="pb-3">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="hidden_more_menu">
                        <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                            <i class='bx bx-plus'></i>
                        </span>
                        <span class="font-semibold block"> Create New Group Chat</span></span>
                    </a>
                </li>
            </ul>

        </div>

    </div>
    <!-- END RIGHT MENU -->
</div>
<!--  END MAIN CONTENT -->
@endsection