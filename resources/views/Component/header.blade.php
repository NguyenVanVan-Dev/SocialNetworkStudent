    <!-- NAV -->
    <nav class="bg-gray-50 dark:bg-dark-second h-max md:h-14 w-full shadow-md flex flex-col md:flex-row 
        items-center justify-center md:justify-between fixed top-0 z-30 border-b
        dark:border-dark-third">
        <!-- LEFT NAV -->
        <div class="flex items-center justify-between w-full md:w-max px-4 py-2">
            <a href="#" class="mr-2 hidden md:inline-block">
                <img src="{{ asset('image/logo_md.png') }}" alt=" Logo " width="30" height="30" class="w-24 sm:w-20 lg:w-10 h-auto">
            </a>
            <a href="" class="inline-block md:hidden">
                <img src="{{ asset('image/facebook-md.png') }}" alt="Logo" class="w-32 h-auto">
            </a>
            <div class="flex justify-between items-center space-x-1">
                <div class="relative bg-gray-100 dark:bg-dark-third px-2 py-2 w-10 h-10 sm:-w-11
                sm:h-11 lg:h-10 lg:w-10 xl:w-max  xl:pl-3 xl:pr-8 rounded-full flex items-center justify-center cursor-pointer">
                    <i class='bx bx-search text-xl xl:mr-2 dark:text-dark-txt'></i>
                    <input type="text" class="outline-none hidden xl:inline-block bg-transparent " placeholder="Search ">
                </div>
                <div class="text-2xl grid place-items-center  md:hidden bg-gray-200
                dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-300
                dark:text-dark-txt">
                    <i class='bx bxl-messenger'></i>
                </div>
                <div class="text-2xl grid place-items-center  md:hidden bg-gray-200
                dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-300
                dark:text-dark-txt" id="dark_mode">
                    <i class='bx bxs-moon'></i>
                </div>
            </div>

        </div>
        <!-- END LEFT NAV -->
        <!-- MAIN NAV -->
        <ul class="flex w-full lg:w-max items-center justify-center text-gray-600">
            <li class="w-1/5 md:w-max text-center">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12 cursor-pointer 
                text-center inline-block text-blue-500 border-b-4 border-blue-500 ">
                    <i class='bx bxs-home'></i>
                </a>
            </li>
            <li class="w-1/5 md:w-max text-center">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12  cursor-pointer 
                text-center inline-block hover:bg-gray-100 dark:hover:bg-dark-third rounded-xl
                dark:text-dark-txt relative">
                    <i class='bx bx-movie-play'></i>
                    <span class="text-xs absolute top-0 right-1/4 bg-red-500 text-white
                    font-semibold rounded-full px-1 text-center">9+</span>
                </a>
            </li>
            <li class="w-1/5 md:w-max text-center">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12  cursor-pointer 
                text-center inline-block hover:bg-gray-100 dark:hover:bg-dark-third rounded-xl
                dark:text-dark-txt relative">
                    <i class='bx bx-store'></i>
                </a>
            </li>
            <li class="w-1/5 md:w-max text-center">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12  cursor-pointer 
                text-center inline-block hover:bg-gray-100 dark:hover:bg-dark-third rounded-xl
                dark:text-dark-txt relative">
                    <i class='bx bx-group'></i>
                </a>
            </li>
            <li class="w-1/5 md:w-max text-center hidden md:inline-block">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12  cursor-pointer 
                text-center inline-block hover:bg-gray-100 dark:hover:bg-dark-third rounded-xl
                dark:text-dark-txt relative">
                    <i class='bx bx-layout'></i>
                    <span class="text-xs absolute top-0 right-1/4 bg-red-500 text-white
                    font-semibold rounded-full px-1 text-center">9+</span>
                </a>
            </li>
            <li class="w-1/5 md:w-max text-center inline-block md:hidden">
                <a href="" class="w-full text-3xl py-2 px-3 xl:px-12  cursor-pointer 
                text-center inline-block hover:bg-gray-100 dark:hover:bg-dark-third rounded-xl
                dark:text-dark-txt relative">
                    <i class='bx bx-menu'></i>
                </a>
            </li>           
        </ul>
        <!-- END MAIN NAV -->
        <!-- RIGHT NAV -->
        <ul class="hidden md:flex mx-4 items-center justify-center ">
            <li class="h-full hidden xl:flex">
                <a href="" class="inline-flex items-center justify-center p-1 rounded-full
                hover:bg-gray-200 dark:hover:bg-dark-third mx-1">
                    <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="Profile picture" class="rounded-full h-7 w-7">
                    <!-- <span class="mx-2 font-semibold dark:text-dark-txt"> Vấn Nguyễn</span> -->
                    <span class="mx-2 font-semibold dark:text-dark-txt">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 cursor-pointer hover:bg-gray-300 relative">
                    <i class='bx bx-plus'></i>
                </div>
            </li>
            <li>
                <button id="messenger_icon" class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 cursor-pointer hover:bg-gray-300 relative btn_messenger">
                    <i class='bx bxl-messenger'></i>
                    <div id="messenger_box" class=" box_messenger absolute w-96 p-2 h-almostfull md:hidden group-focus:block bg-white shadow-2xl rounded-lg top-12 -right-24">
                        <div class=" px-2 flex justify-between items-center">
                            <span class="font-semibold text-2xl mb-2">Messenger</span>
                            <ul>
                                <li class="inline-block mx-1 ">
                                    <span>
                                        <i class='bx bx-customize'></i>
                                    </span>
                                </li>
                                <li class="inline-block mx-1 ">
                                    <span>
                                        <i class='bx bx-exit-fullscreen'></i>
                                    </span>
                                </li>
                                <li class="inline-block mx-1 ">
                                    <span>
                                        <i class='bx bx-camera-movie'></i>
                                    </span>
                                </li>
                                <li class="inline-block">
                                    <span>
                                        <i class='bx bxs-edit'></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class=" px-2 w-full relative my-2">
                            <span class="absolute top-1.5 left-4 text-gray-500"><i class='bx bx-search'></i></span>
                            <input type="text" class="w-full bg-gray-200 rounded-full px-9 overflow-hidden py-3 outline-none h-9 text-sm text-gray-700" placeholder="Tìm kiếm trên Messenger">
                        </div>
                        <div class="overflow-hidden h-80%">
                            <ul class="overflow-y-scroll h-full">
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=" px-2 py-3 rounded-md hover:bg-gray-200">
                                    <a href="" class="">
                                        <div class="flex items-center">
                                            <div class="w-max mr-3">
                                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                                            </div>
                                            <div class="flex-auto">
                                                <div class="flex items-center justify-between text-lg">
                                                    <span class="font-semibold">Nguyễn Văn Vấn</span>
                                                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                                                </div>
                                                <div class="text-gray-500 text-sm flex justify-between items-center">
                                                    <div class="w-4/5 ">
                                                        <p class="truncate w-56">
                                                            <span>
                                                                You:
                                                            </span>
                                                            Xin chào các bạn mình là vấn best yasuo
                                                        </p>
                                                    </div>
                                                    <div class="w-1/5">
                                                        <span class="text-xs "> 14 phút </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center m-2">
                            <span class="p-2 text-blue-500 hover:underline text-lg font-semibold">Xem tất cả trong Mesenger</span>
                        </div>
                    </div>
                </button>
            </li>
            <li>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 cursor-pointer hover:bg-gray-300 relative">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="text-xs absolute top-0 right-0 bg-red-500 text-white
                    font-semibold rounded-full px-1 text-center">9+</span>
                </div>
            </li>
            <li>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 cursor-pointer hover:bg-gray-300 relative" id="dark_mode_mb">
                    <i class='bx bxs-moon'></i>
                </div>
            </li>
            <li>
                <button class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 group cursor-pointer hover:bg-gray-300 relative btn_option_setting" >
                    <i class='bx bxs-chevron-down transform '></i>
                    <div class="absolute w-96 p-2 hidden bg-white shadow-2xl rounded-lg top-12 -right-2 box_setting" tabindex="0">
                        <div class="my-2 mb-2">
                            <a href="#" class="flex items-center space-x-4 p-2 hover:bg-gray-200
                            dark:bg-dark-third rounded-lg transition-all">
                                <img src="{{ asset('image/yasuo.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                                <div class="flex-1">
                                    <div class="text-left">
                                        <span class="font-semibold text-xl dark:text-dark-txt">{{ Auth::user()->name }}</span>
                                    </div>
                                    <div class="flex space-x-2 ">
                                        <span class="text-gray-500 text-sm">See your profile</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" border-b border-gray-300 border-2"></div>
                        <div class="my-2 mb-2">
                            <a href="#" class="flex items-center space-x-4 p-2 hover:bg-gray-200
                            dark:bg-dark-third rounded-lg transition-all">
                                <span class="grid place-items-center text-3xl text-gay-500 bg-gray-300 w-14 h-14 rounded-full">
                                    <i class='bx bxs-receipt'></i>
                                </span>
                                <div class="flex-1">
                                    <div class="text-left">
                                        <span class="font-semibold text-xl dark:text-dark-txt"> Contribute Opinion</span>
                                    </div>
                                    <div class="flex space-x-2 ">
                                        <span class="text-gray-500 text-sm">Contribute New Student Network</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" border-b border-gray-300 border-2"></div>
                        <div>
                            <ul>
                                <li class="p-2">
                                    <div class=" flex-1 flex justify-between items-center">
                                        <a href="#" class="flex items-center space-x-4 p-2 hover:bg-gray-200
                                            dark:bg-dark-third rounded-lg transition-all">
                                            <img src="{{ asset('image/anh-ysauo.jpg') }}" class="w-10 h-10 rounded-full" alt="">
                                            <div class="flex-1">
                                                <div class="text-left">
                                                    <span class="font-semibold text-xl dark:text-dark-txt"> Account transfer </span>
                                                </div>
                                                <div class="flex space-x-2 ">
                                                    <span class="text-gray-500 text-sm">Contribute New Student Network</span>
                                                </div>
                                            </div>
                                        </a>
                                        <span class="grid place-items-center text-2xl text-gay-500 w-10 h-10 rounded-md bg-gray-300">
                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                        </span>
                                    </div>
                                </li>
                                <li class="p-2 hover:bg-gray-300 rounded-md">
                                    <div class="flex justify-between items-center">
                                        <div class=" flex-1 flex items-center">
                                            <span class="grid place-items-center text-3xl text-gray-500 bg-gray-300 w-10 h-10 rounded-full">
                                                <i class='bx bxs-cog'></i>
                                            </span>
                                            <span class="ml-4 font-medium text-lg"> Settings & Pravite rule</span>
                                        </div>
                                        <div>
                                            <span class="text-3xl text-gray-500"><i class='bx bx-chevron-right'></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 hover:bg-gray-300 rounded-md">
                                    <div class="flex justify-between items-center">
                                        <div class=" flex-1 flex items-center">
                                            <span class="grid place-items-center text-3xl text-gray-500 bg-gray-300 w-10 h-10 rounded-full">
                                                <i class='bx bx-question-mark'></i>
                                            </span>
                                            <span class="ml-4 font-medium text-lg"> Question & Help</span>
                                        </div>
                                        <div>
                                            <span class="text-3xl text-gray-500"><i class='bx bx-chevron-right'></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 hover:bg-gray-300 rounded-md">
                                    <div class="flex justify-between items-center">
                                        <div class=" flex-1 flex items-center">
                                            <span class="grid place-items-center text-3xl text-gray-500 bg-gray-300 w-10 h-10 rounded-full">
                                                <i class='bx bxs-brightness-half'></i>
                                            </span>
                                            <span class="ml-4 font-medium text-lg"> Screen & Accessibility</span>
                                        </div>
                                        <div>
                                            <span class="text-3xl text-gray-500"><i class='bx bx-chevron-right'></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 hover:bg-gray-300 rounded-md">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <div class="flex justify-between items-center">
                                            <div class=" flex-1 flex items-center">
                                                <span class="grid place-items-center text-3xl text-gray-500 bg-gray-300 w-10 h-10 rounded-full">
                                                    <i class='bx bx-log-out'></i>
                                                </span>
                                                <span class="ml-4 font-medium text-lg"> Logout </span>
                                            </div>
                                        </div>
                                    </a>                                  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                            <div class="mt-auto p-4 text-sm text-gray-500 dark:text-dark-txt">
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
                    </div>
                </button>
            </li>


        </ul>
        <!-- END RIGHT NAV -->
    </nav>
    <!-- End Nav -->