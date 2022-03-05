 <!-- RIGHT MENU -->
 <div class="hidden lg:w-1/5  lg:flex flex-col  pt-16 h-full  fixed top-0 right-0 bg-white ">
 <!-- <div class="lg:w-1/5 pt-16 h-full hidden md:block lg:flex flex-col  fixed top-0 right-0 bg-white "> -->
        <div class="h-full  overflow-y-scroll ">
            <div class="p-3 bg-white rounded-lg mr-2 max-h-64 hidden xl:block">
                <div class="flex justify-between items-center  pt-4">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-4 h-4 m-2">
                        <span class="font-semibold text-gray-800 text-base dark:text-dark-txt"> Friend requests</span>
                    </div>
                    <div class="border-b border-gray-200 dark:border-dark-third mt-6"></div>
                    <button class="relative  btn_friend">
                        <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2 rounded-xl ">
                            <i class='bx bx-dots-horizontal-rounded w-4 h-4'></i>
                        </span>
                        <div class=" box_friend absolute right-0 w-64 top-7 bg-white shadow-2xl rounded-lg hidden group-focus:block">
                            <div class="p-2 hover:bg-gray-300 rounded-xl">
                                <a href="http://127.0.0.1:8000/" class=" flex  items-center">
                                    <span class="w-10 h-10 grid place-items-center text-xl bg-gray-200
                                        dark:hover:bg-dark-third rounded-full cursor-pointer">
                                        <i class='bx bxs-x-square'></i>
                                    </span>
                                    <span class="text-base ml-4">
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
                <div class="list-request-friend" id="list-request-friend">
                    <!-- <div class="my-2">
                        <div  class="flex items-center space-x-4 p-2 hover:bg-gray-200 dark:bg-dark-third rounded-lg transition-all">
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
                        </div>
                    </div> -->
                </div>

            </div>
            <div class="border-b border-gray-200 dark:border-dark-third mt-6"></div>
            <!-- CONTACTS -->
            <div class="flex justify-between items-center px-4 pt-4 text-gray-500
            dark:text-dark-txt">
                <span class="font-semibold text-lg">Contacts</span>
                <div class="flex space-x-1">
                    <div id="testCall" class="w-8 h-8 grid place-items-center text-xl hover:bg-gray-200
                    dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-search '></i>
                    </div>
                    <div id="testMes" class="w-8 h-8 grid place-items-center text-xl hover:bg-gray-200
                    dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-200 dark:border-dark-third mt-6"></div>
            <ul class="p-2  ">
            <?php
                use App\http\Controllers\UsersController;
            ?>
            @if(!empty($friends))  
                @foreach ($friends as $key => $listfriend)
                    @if(statusFriend(Auth::user()->id,$listfriend->id) == 'Accepted')
                    <li>
                        <div class="flex justify-between items-center space-x-4 p-2 hover:bg-gray-200
                        dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer">
                            <div class="flex-1 flex  items-center"> 
                                <div class="relative">
                                    <img src=" {{URL::to('/image/'.$listfriend->avatar)}}" class="rounded-full w-10 h-10 object-cover" alt="">
                                    <span id="activeStatus-{{$listfriend->id}}" class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                                </div>
                                <div class="ml-2">
                                    <span class="font-semibold"> {{ $listfriend->name }}</span>
                                </div>
                            </div>
                            <div id="CallVideo" friend-id="{{$listfriend->user_id}}" class="CallVideo text-xl hidden xl:grid place-items-center bg-gray-200
                            dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                                <i class="bx bx-camera-movie"></i>
                            </div>
                        </div>
                    </li>
                    @endif
                @endforeach
            @endif
               
     
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