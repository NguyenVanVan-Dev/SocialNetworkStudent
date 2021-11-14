<div class="w-full lg:w-2/3 xl:w-2/5 pt-32 lg:pt-16 px-2 ">
        <!-- STORY -->
        <div class="relative flex space-x-2 pt-4">
            <div class="w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden flex flex-col group cursor-pointer">
                <div class="h-4/6 overflow-hidden">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" class="group-hover:transform object-cover group-hover:scale-110 transition-all duration-700" alt="">
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
            <div class="w-3/4 sm:w-4/5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 grid-rows-1  gap-2 overflow-hidden">
                <div class="w-full h-48 rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-full group cursor-pointer">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                        <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                        <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                            Your Story
                        </span>
                        <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full h-48 rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-full group cursor-pointer">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                        <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                        <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                            Your Story
                        </span>
                        <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full h-48 rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-full group cursor-pointer">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                        <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                        <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                            Your Story
                        </span>
                        <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full h-48 rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-full group cursor-pointer">
                        <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                        <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                        <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                            Your Story
                        </span>
                        <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                            <img src="{{ asset('image/yasuo.jpg') }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700" alt="">
                        </div>
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
                <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="rounded-full w-10 h-10 object-cover">
                <div id="input_post" class="flex-1 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-start pl-4 cursor-pointer dark:bg-dark-third dark:text-dark-txt text-gray-500 text-lg">
                    <span class="">
                        What's on your mind, {{Auth::user()->name}}?
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
        <!-- ROOM -->
        <div class="p-4 mt-4 shadow-md rounded-lg h-16 bg-white dark:bg-dark-second overflow-hidden relative">
            <div id="provi_friend" class="absolute hidden w-12 h-12 rounded-full  place-items-center text-2xl text-gray-500 bg-white left-3 top-1/2 transform -translate-y-1/2 rotate-180 border border-gray-200 cursor-pointer
                hover:bg-gray-100 shadow-md dark:bg-dark-third dark:border-dark-third dark:text-dark-txt">
                <i class='bx bx-chevron-right'></i>
            </div>
            <div class="flex space-x-4 absolute w-max transition-all duration-700 left-5" id="friend_group">

                <div class="w-max flex space-x-2 items-center justify-center border-2 px-6
                border-blue-200 dark:border-blue-700 rounded-full cursor-pointer">
                    <i class='bx bx-video-plus text-2xl text-purple-500'></i>
                    <span class="text-sm font-semibold text-blue-500">Create Room</span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
                <div class="relative cursor-pointer">
                    <img src="{{ asset('image/story-1.png') }}" class="rounded-full w-10 h-10" alt="">
                    <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                </div>
            </div>
            <div id="next_friend" class="absolute  w-12 h-12 rounded-full hidden lg:grid place-items-center text-2xl text-gray-500 bg-white right-3 top-1/2 transform -translate-y-1/2 border border-gray-200 cursor-pointer
                hover:bg-gray-100 shadow-md dark:bg-dark-third dark:border-dark-third dark:text-dark-txt">
                <i class='bx bx-chevron-right'></i>
            </div>
        </div>
        <!-- END ROOM -->
        <!-- LIST POST -->
        <div>
            <!-- POST -->
            <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg">
                <div class="flex items-center justify-between px-4 py-2">
                    <div class="flex space-x-2 items-center">
                        <div class="relative">
                            <img src="{{ asset('image/anh-ysauo.jpg') }}" class="w-10 h-10 rounded-full" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                            top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <div class="font-semibold">
                                {{ Auth::user()->name }}
                            </div>
                            <span class="text-sm text-gray-500">1h</span>
                        </div>
                    </div>
                    <div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
                <!-- END POST AUTHOR -->
                <!-- POST CONTENT -->
                <div class="text-justify px-4 py-2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla tempora iure esse unde natus consectetur ab similique sunt dolore. Nisi officiis vel saepe atque rerum ab inventore amet aspernatur illum!

                </div>
                <!-- END POST CONTENT -->
                <!-- POST IMAGE -->
                <div class="py-2 max-h-96">
                    <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class=" m-auto h-96">
                </div>
                <!-- END POST IMAGE -->
                <!-- POST REACT -->
                <div class="px-4 py-2">
                    <div class=" flex items-center justify-between">
                        <div class="flex flex-row-reverse items-center">
                            <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class='bx bx-angry'></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class='bx bxs-heart'></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class='bx bxs-happy-alt'></i></span>
                        </div>
                        <div class=" text-gray-500 dark:text-dark-txt">
                            <span>900 comment</span>
                            <span>500 share</span>
                        </div>
                    </div>

                </div>
                <!-- END POST REACT -->
                <!-- POST ACTION -->
                <div class="px-4 py-2 ">
                    <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-like'></i>
                            <span class="font-semibold text-sm">Like</span>
                        </div>
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-comment-edit'></i>
                            <span class="font-semibold text-sm">Comment</span>
                        </div>
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-share bx-flip-horizontal'></i>
                            <span class="font-semibold text-sm">Share</span>
                        </div>
                    </div>

                </div>
                <!-- END POST ACTION -->
                <!-- LIST COMMENT -->
                <div class="py-2 px-4">
                    <!-- COMMENT -->
                    <div class="flex space-x-2 ">
                        <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-9 h-9 rounded-full">
                        <div>
                            <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                <span class="font-semibold block">Hai Ba Dong</span>
                                <span>Anh dep qua ,xin chao ban nha </span>
                            </div>
                            <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                <span class="font-semibold cursor-pointer">Like </span>
                                <span>. </span>
                                <span class="font-semibold cursor-pointer"> Reply </span>
                                <span> . </span>
                                10m
                            </div>
                            <div class="flex space-x-2">
                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-9 h-9 rounded-full">
                                <div>
                                    <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                        <span class="font-semibold block">Hai Ba Dong</span>
                                        <span>Anh dep qua ,xin chao ban nha </span>
                                    </div>
                                    <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                        <span class="font-semibold cursor-pointer">Like </span>
                                        <span>. </span>
                                        <span class="font-semibold cursor-pointer"> Reply </span>
                                        <span> . </span>
                                        10m
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 ">
                        <div class="w-9">
                            <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-full h-9 rounded-full">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                <span class="font-semibold block">Hai Ba Dong</span>
                                <span>Anh dep qua ,xin chao ban nha </span>
                            </div>
                            <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                <span class="font-semibold cursor-pointer">Like </span>
                                <span>. </span>
                                <span class="font-semibold cursor-pointer"> Reply </span>
                                <span> . </span>
                                10m
                            </div>
                            <div class="flex space-x-2">
                                <div class="w-9">
                                    <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-full h-9 rounded-full">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                        <span class="font-semibold block">Hai Ba Dong</span>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores libero cum! Perspiciatis quod accusamus ex esse quos voluptas consequuntur officia amet non accusantium ullam aliquid, saepe deleniti natus harum. </span>
                                    </div>
                                    <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                        <span class="font-semibold cursor-pointer">Like </span>
                                        <span>. </span>
                                        <span class="font-semibold cursor-pointer"> Reply </span>
                                        <span> . </span>
                                        10m
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COMMENT -->
                    <!-- COMMENT FORM -->
                    <div class="px-4 py-2">
                        <div class="flex space-x-2">
                            <img src="{{ asset('image/friends.png') }}" class="w-9 h-9 rounded-full" alt="">
                            <div class="flex flex-1 bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between bg-transparent px-3">
                                <input type="text" name="" id="" class="outline-none bg-transparent flex-1" placeholder="Write a comment">
                                <div class="flex space-x-0 items-center justify-center ">
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-wink-smile'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-camera'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-gift'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-happy-heart-eyes'></i></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COMMENT FORM -->
                </div>
                <!-- END LIST COMMENT -->
            </div>
            <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg">
                <div class="flex items-center justify-between px-4 py-2">
                    <div class="flex space-x-2 items-center">
                        <div class="relative">
                            <img src="{{ asset('image/anh-ysauo.jpg') }}" class="w-10 h-10 rounded-full" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                            top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <div class="font-semibold">
                                {{ Auth::user()->name }}
                            </div>
                            <span class="text-sm text-gray-500">1h</span>
                        </div>
                    </div>
                    <div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
                <!-- END POST AUTHOR -->
                <!-- POST CONTENT -->
                <div class="text-justify px-4 py-2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla tempora iure esse unde natus consectetur ab similique sunt dolore. Nisi officiis vel saepe atque rerum ab inventore amet aspernatur illum!

                </div>
                <!-- END POST CONTENT -->
                <!-- POST IMAGE -->
                <div class="py-2 max-h-96">
                    <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class=" m-auto h-96">
                </div>
                <!-- END POST IMAGE -->
                <!-- POST REACT -->
                <div class="px-4 py-2">
                    <div class=" flex items-center justify-between">
                        <div class="flex flex-row-reverse items-center">
                            <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class='bx bx-angry'></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class='bx bxs-heart'></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class='bx bxs-happy-alt'></i></span>
                        </div>
                        <div class=" text-gray-500 dark:text-dark-txt">
                            <span>900 comment</span>
                            <span>500 share</span>
                        </div>
                    </div>

                </div>
                <!-- END POST REACT -->
                <!-- POST ACTION -->
                <div class="px-4 py-2 ">
                    <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-like'></i>
                            <span class="font-semibold text-sm">Like</span>
                        </div>
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-comment-edit'></i>
                            <span class="font-semibold text-sm">Comment</span>
                        </div>
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class='bx bx-share bx-flip-horizontal'></i>
                            <span class="font-semibold text-sm">Share</span>
                        </div>
                    </div>

                </div>
                <!-- END POST ACTION -->
                <!-- LIST COMMENT -->
                <div class="py-2 px-4">
                    <!-- COMMENT -->
                    <div class="flex space-x-2 ">
                        <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-9 h-9 rounded-full">
                        <div>
                            <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                <span class="font-semibold block">Hai Ba Dong</span>
                                <span>Anh dep qua ,xin chao ban nha </span>
                            </div>
                            <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                <span class="font-semibold cursor-pointer">Like </span>
                                <span>. </span>
                                <span class="font-semibold cursor-pointer"> Reply </span>
                                <span> . </span>
                                10m
                            </div>
                            <div class="flex space-x-2">
                                <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-9 h-9 rounded-full">
                                <div>
                                    <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                        <span class="font-semibold block">Hai Ba Dong</span>
                                        <span>Anh dep qua ,xin chao ban nha </span>
                                    </div>
                                    <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                        <span class="font-semibold cursor-pointer">Like </span>
                                        <span>. </span>
                                        <span class="font-semibold cursor-pointer"> Reply </span>
                                        <span> . </span>
                                        10m
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 ">
                        <div class="w-9">
                            <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-full h-9 rounded-full">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                <span class="font-semibold block">Hai Ba Dong</span>
                                <span>Anh dep qua ,xin chao ban nha </span>
                            </div>
                            <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                <span class="font-semibold cursor-pointer">Like </span>
                                <span>. </span>
                                <span class="font-semibold cursor-pointer"> Reply </span>
                                <span> . </span>
                                10m
                            </div>
                            <div class="flex space-x-2">
                                <div class="w-9">
                                    <img src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="w-full h-9 rounded-full">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm">
                                        <span class="font-semibold block">Hai Ba Dong</span>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores libero cum! Perspiciatis quod accusamus ex esse quos voluptas consequuntur officia amet non accusantium ullam aliquid, saepe deleniti natus harum. </span>
                                    </div>
                                    <div class="p-2 text-xs text-gray-500 dark:text-dark-txt ">
                                        <span class="font-semibold cursor-pointer">Like </span>
                                        <span>. </span>
                                        <span class="font-semibold cursor-pointer"> Reply </span>
                                        <span> . </span>
                                        10m
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COMMENT -->
                    <!-- COMMENT FORM -->
                    <div class="px-4 py-2">
                        <div class="flex space-x-2">
                            <img src="{{ asset('image/friends.png') }}" class="w-9 h-9 rounded-full" alt="">
                            <div class="flex flex-1 bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between bg-transparent px-3">
                                <input type="text" name="" id="" class="outline-none bg-transparent flex-1" placeholder="Write a comment">
                                <div class="flex space-x-0 items-center justify-center ">
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-wink-smile'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-camera'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-gift'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                        <i class='bx bx-happy-heart-eyes'></i></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COMMENT FORM -->
                </div>
                <!-- END LIST COMMENT -->
            </div>
            <!-- END POST -->
        </div>
        <!--  END LIST POST -->
    </div>