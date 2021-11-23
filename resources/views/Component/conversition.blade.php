<div class="w-full flex justify-center" >
    <div class="lg:w-8/12  mr-4 w-full">
        <div class="header-conver flex justify-between items-center py-4 border-b border-gray-700">
            <div class="info-friend relative flex justify-between items-center">
                <img src="/image/{{$info_friend->avatar}}" alt="" class="w-10 h-10 rounded-full object-cover">
                <div class="ml-3 text-lg text-gray-700 "> {{$info_friend->name}}</div>
            </div>
            <div class="action-friends flex justify-between items-center mr-4">
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                </div>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bx-camera-movie"></i>
                </div>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bxs-edit"></i>
                </div>
            </div>
        </div>
        <div class="h-4/5  max-h-4/5">
            <!-- Chat -->
            <div class="conversition flex flex-col pt-2 transition-all max-h-full overflow-y-auto" id="box_chats" >
            @if(!empty($messages)) 
                @foreach($messages as $key =>$value)
                    @if($value->id_userFrom == Auth::user()->id )
                    <div class="relative flex justify-start items-center py-4 self-end mr-4">
                        <div class="absolute -top-1 right-14 text-sm text-gray-700">You</div>
                        <div class="mr-4 rounded-xl rounded-br-none p-2 max-w-sm bg-blue-500 text-white">
                            <span class="text-base font-normal">
                                {{$value->message}}
                            </span>
                            <span class="text-xs text-white block">{{date_format($value->created_at,"H:i")}}</span>
                        </div>
                        <img src="/image/{{Auth::user()->avatar}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    </div>
                    @else
                        <div class="relative flex justify-start items-center py-4 ">
                            <div class="absolute -top-1 left-14 text-sm text-gray-700">{{ $info_friend->name}}</div>
                            <img src="/image/{{ $info_friend->avatar}}" alt="" class="w-10 h-10 rounded-full object-cover">
                            <div class="ml-4 bg-gray-200 rounded-xl rounded-bl-none p-2 max-w-sm">
                                <span class="text-base font-normal">
                                {{$value->message}}
                                </span>
                                <span class="text-xs text-gray-700 block">{{date_format($value->created_at,"H:i")}}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            </div>
        </div>
        <div class="form-send flex justify-between items-center border-t border-gray-500 py-2 ">
            <div>
                <ul class="hidden md:block">
                    <li class="inline-block  ">
                        <span class="grid place-items-center text-3xl text-green-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnImagePost">
                            <i class="bx bx-images"></i>
                        </span>
                    </li>
                    <li class="inline-block  ">
                        <span class="grid place-items-center text-3xl text-yellow-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnVideoPost" >
                            <i class="bx bxs-videos"></i>
                        </span>
                    </li>
                    <li class="inline-block  ">
                        <span class="grid place-items-center text-3xl text-blue-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                            <i class="bx bx-smile" ></i>
                        </span>
                    </li>
                    <li class="inline-block  ">
                        <span class="grid place-items-center text-3xl text-purple-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                            <i class="bx bxs-file-gif"></i>
                        </span>
                    </li>
                    <li class="inline-block  ">
                        <span class="grid place-items-center text-3xl text-red-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                            <i class="bx bxs-microphone"></i>
                        </span>
                    </li>
                </ul>
            </div>
            <div class=" flex-1 rounded-full p-2 bg-white text-gray-800 ">
                <form >
                    <input type="text" onkeypress="sendMessage(event)" class="px-3 bg-transparent w-full outline-none text-base font-medium send_message" placeholder="Write a message">
                </form>
            </div>
            <div class="">
                <span class="grid place-items-center text-3xl  hover:bg-gray-300 w-10 h-10 rounded-full">
                    <i class="bx bx-dots-horizontal-rounded" ></i>
                </span>
            </div>
        </div>
    </div>
    <div class="w-4/12 hidden md:hidden lg:block bg-white shadow-md p-2 rounded-md">
        <div class="flex justify-center items-center flex-col mb-3">
            <div class="info">
                <img src="/image/{{$info_friend->avatar}}" alt="" class="w-20 h-20 rounded-t-lg object-cover">
            </div>
            <div class="mx-2">
                <span class="font-semibold text-lg text-center"> {{$info_friend->name}}</span>
            </div>
        </div>
        <div>
            <ul >
                <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
                    <div>
                        <span class="font-medium text-base ">Customize chat</span>
                    </div>
                    <div>
                        <span> <i class="bx bx-chevron-right"></i></span>
                    </div>
                </li>
                <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
                    <div>
                        <span class="font-medium text-base ">Privacy and support</span>
                    </div>
                    <div>
                        <span> <i class="bx bx-chevron-right"></i></span>
                    </div>
                </li>
                <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
                    <div>
                        <span class="font-medium text-base "  > Shared file</span>
                    </div>
                    <div>
                        <span> <i class="bx bx-chevron-right"></i></span>
                    </div>
                </li>
                <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
                    <div>
                        <span class="font-medium text-base ">  Shared media files</span>
                    </div>
                    <div>
                        <span> <i class="bx bx-chevron-right"></i></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>