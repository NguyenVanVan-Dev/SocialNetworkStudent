<div class="w-full md:w-2/3 lg:w-1/2 pt-32 lg:pt-16 px-2 absolute">
        <?php   use App\http\Controllers\UsersController;  ?>
        <!-- STORY -->
        <div class="relative flex space-x-2 pt-4">
            <div class="w-1/4 sm:w-1/5 h-48 rounded-lg shadow-md overflow-hidden bg-white flex flex-col group cursor-pointer">
                <div class="h-4/6 overflow-hidden">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" class="group-hover:transform object-cover group-hover:scale-110 transition-all duration-700" alt="">
                </div>
                <a href="{{ route('stories.create')}}" class="flex-1">
                <div class=" relative flex items-center justify-center pb-2 text-center
                    leading-none dark:bg-dark-second dark:text-dark-txt">
                        <span class="font-semibold">
                            Create a <br> Story
                        </span>
                        <div class=" w-10 h-10 rounded-full bg-blue-500 text-white grid place-items-center text-2xl border-4 border-white dark:border-dark-second absolute
                        -top-5 left-1/2 transform -translate-x-1/2">
                            <i class='bx bx-plus'></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-3/4 sm:w-4/5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 grid-rows-1  gap-2 overflow-hidden">
            @if(!empty($stories))
                @foreach($stories as $key => $value)   
                    @if(UsersController::statusFriend(Auth::user()->id,$value->user_id) == 'Accepted' || $value->user_id == Auth::user()->id)
                    <?php $info = UsersController::getInfoUser($value->user_id);?> 
                    <div class="w-full h-48 rounded-lg shadow-md overflow-hidden">
                        <div class="relative h-full group cursor-pointer">
                            @if(!empty($value->image))
                            <img src="{{ asset('image/'.$value->image ) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                            @endif
                            @if(!empty($value->video))
                                <video controls class="mx-auto w-full absolute top-14 z-10 bg-gray-500" >
                                    <source  src="{{URL::to('/image/'. $value->video )}}" type="video/mp4">
                                    <source src="{{URL::to('/image/'. $value->video )}}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                            <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                            <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                               {{ $info->name }}
                            </span>
                            <div class=" rounded-full overflow-hidden  z-20 absolute top-14 bg-gray-50 opacity-30 right-2 border border-yellow-500 transform  ">
                                <span class="text-black font-medium p-1 ">{{ $value->content}}</span>
                            </div>
                            <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                                <img src="{{ asset('image/'.$info->avatar) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700  h-full w-full object-cover" alt="">
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif    
            </div>
           
            <div class="w-12 h-12 rounded-full hidden lg:grid place-items-center text-2xl bg-white absolute z-20 -right-6 top-1/2 transform -translate-y-1/2 border border-gray-200
            cursor-pointer hover:bg-gray-100 shadow-md text-gray-500 dark:bg-dark-third dark:text-dark-txt dark:border-dark-third">
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </div>
        <!--  END STORY-->
        <!-- POST FORM -->
        <div class="px-4 mt-4 shadow-md rounded-lg bg-white dark:bg-dark-second">
            <div class="p-2 border-b border-gray-300 dark:border-dark-third flex space-x-4">
                <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="rounded-full w-10 h-10 object-cover">
                <div id="openPost" class=" openPost flex-1 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-start pl-4 cursor-pointer dark:bg-dark-third dark:text-dark-txt text-gray-500 text-lg">
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
                @if(!empty($friends))  
                    @foreach ($friends as $key => $listfriend)
                        @if(UsersController::statusFriend(Auth::user()->id,$listfriend->id) == 'Accepted')
                        <div class="relative cursor-pointer">
                            <img src="{{ asset('image/'.$listfriend->avatar) }}" class="rounded-full w-10 h-10" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <div id="next_friend" class="absolute  w-12 h-12 rounded-full hidden lg:grid place-items-center text-2xl text-gray-500 bg-white right-3 top-1/2 transform -translate-y-1/2 border border-gray-200 cursor-pointer
                hover:bg-gray-100 shadow-md dark:bg-dark-third dark:border-dark-third dark:text-dark-txt">
                <i class='bx bx-chevron-right'></i>
            </div>
        </div>
        <!-- END ROOM -->
        <!-- LIST POST -->
        <div class="" id="listPosts">
           
            @foreach($userposts as $key => $value )
            <!-- POST -->
            <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg" id="post-{{$value->id}}" data-id="{{$value->id}}">
                <div class="flex items-center justify-between px-4 py-2">
                    <div class="flex space-x-2 items-center">
                        <div class="relative">
                            <img src="{{URL::to('/image/'. Auth::user()->avatar )}}" class="w-10 h-10 rounded-full" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                            top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <div class="font-semibold">
                               {{ Auth::user()->name }}
                            </div>
                            <span class="text-sm text-gray-500">{{ date("h:i:sa d/m/Y", strtotime($value->created_at)) }}</span>
                        </div>
                    </div>
                    <div data-id="{{$value->id }}" class="w-8 h-8 handelPost relative grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                        <div class="absolute top-full right-0 w-40 hidden  dropPost " id="handelPost-{{$value->id }}"> 
                            <ul>
                                <li>
                                    <div class="p-1 text-center bg-gray-100 rounded-md border-b border-gray-200 btnDelPost" data-id="{{$value->id }}"> 
                                        <span class=" font-medium text-lg"> Remove Post</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-1 text-center bg-gray-100 rounded-md border-b border-gray-200 btnHidPost" data-id="{{$value->id }}"> 
                                        <span class=" font-medium text-lg"> Hidden Post</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
               
                <div class="text-justify px-4 py-2">
                    {{$value->content}}
                </div>
               
                <div class="py-2 ">
                        @if(!empty($value->image))
                            <img src="{{URL::to('/image/'. $value->image)}}" alt="" class=" m-auto ">
                        @endif
                        @if(!empty($value->video))
                            <video controls class="mx-auto w-full h-96 bg-gray-500" >
                                <source id="review_video_post" src="{{URL::to('/image/'. $value->video )}}" type="video/mp4">
                                <source src="{{URL::to('/image/'. $value->video )}}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                </div>
               
                <div class="px-4 py-2">
                    <div class=" flex items-center justify-between">
                        <div class="flex flex-row-reverse items-center">
                            <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class="bx bx-angry"></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class="bx bxs-heart"></i></span>
                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class="bx bxs-happy-alt"></i></span>
                        </div>
                        <div class=" text-gray-500 dark:text-dark-txt">
                            <span>900 comment</span>
                            <span>500 share</span>
                        </div>
                    </div>

                </div>
                
                <div class="px-4 py-2 ">
                    <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class="bx bx-like"></i>
                            <span class="font-semibold text-sm">Like</span>
                        </div>
                        <div data-id="{{$value->id}}" class="btnComment w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class="bx bx-comment-edit"></i>
                            <span class="font-semibold text-sm">Comment</span>
                        </div>
                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                            <i class="bx bx-share bx-flip-horizontal"></i>
                            <span class="font-semibold text-sm">Share</span>
                        </div>
                    </div>
                </div>
               
                <div class="py-2 px-4" >
                        <div class="px-4 py-2 hidden boxComment" id="listComment-{{$value->id}}">
                            <div id="commentPost-{{$value->id}}" class="overflow-y-auto max-h-96">

                            </div>
                            <div class="flex space-x-2">
                                <img src="/image/{{ Auth::user()->avatar}}" class="w-9 h-9 rounded-full" alt="">
                                <div class="flex flex-1 bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between bg-transparent px-3">
                                    <form  class="w-full">
                                        <input type="text" name="comment" onkeypress="handle(event)" id="{{$value->id}}"  class=" user_comment w-full outline-none bg-transparent flex-1" placeholder="Write a comment">
                                    </form>
                                    
                                    <div class="flex space-x-0 items-center justify-center ">
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-wink-smile"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-camera"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-gift"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-happy-heart-eyes"></i></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
            @foreach($friendposts as $key =>$value)
                @if(UsersController::statusFriend(Auth::user()->id,$value->user_id) == 'Accepted')
                <?php $info = UsersController::getInfoUser($value->user_id);?>
                            <!-- POST -->
                <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg" id="post-{{$value->id}}" data-id="{{$value->id}}">
                    <div class="flex items-center justify-between px-4 py-2">
                        <div class="flex space-x-2 items-center">
                            <div class="relative">
                                <img src="{{URL::to('/image/'. $info->avatar )}}" class="w-10 h-10 rounded-full" alt="">
                                <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                                top-3/4 border-white border-2"></span>
                            </div>
                            <div>
                                <div class="font-semibold">
                                {{ $value->user_name }}
                                </div>
                                <span class="text-sm text-gray-500">{{ date("h:i:sa d/m/Y", strtotime($value->created_at)) }}</span>
                            </div>
                        </div>
                        <div data-id="{{$value->id }}" class="relative handelPost w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                            <div class="absolute top-full right-0 w-40 hidden  dropPost " id="handelPost-{{$value->id }}"> 
                                <ul>
                                    <li>
                                        <div class="p-1 text-center bg-gray-100 rounded-md border-b border-gray-200 btnHidPost" data-id="{{$value->id }}"> 
                                            <span class=" font-medium text-lg"> Hidden Post</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-justify px-4 py-2">
                        {{$value->content}}
                    </div>
                    <div class="py-2 ">
                        @if(!empty($value->image))
                            <img src="{{URL::to('/image/'. $value->image)}}" alt="" class=" m-auto ">
                        @endif
                        @if(!empty($value->video))
                            <video controls class="mx-auto w-full h-96 bg-gray-600" >
                                <source id="review_video_post" src="{{URL::to('/image/'. $value->video )}}" type="video/mp4">
                                <source src="{{URL::to('/image/'. $value->video )}}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                    <div class="px-4 py-2">
                        <div class=" flex items-center justify-between">
                            <div class="flex flex-row-reverse items-center">
                                <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class="bx bx-angry"></i></span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class="bx bxs-heart"></i></span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class="bx bxs-happy-alt"></i></span>
                            </div>
                            <div class=" text-gray-500 dark:text-dark-txt">
                                <span>900 comment</span>
                                <span>500 share</span>
                            </div>
                        </div>

                    </div>          
                    <div class="px-4 py-2 ">
                        <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">
                            <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                <i class="bx bx-like"></i>
                                <span class="font-semibold text-sm">Like</span>
                            </div>
                            <div data-id="{{$value->id}}" class="btnComment w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                <i class="bx bx-comment-edit"></i>
                                <span class="font-semibold text-sm">Comment</span>
                            </div>
                            <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                <i class="bx bx-share bx-flip-horizontal"></i>
                                <span class="font-semibold text-sm">Share</span>
                            </div>
                        </div>
                    </div>
                
                    <div class="py-2 px-4">
                        
                        <div class="px-4 py-2 hidden boxComment" id="listComment-{{$value->id}}">
                            <div id="commentPost-{{$value->id}}" class="overflow-y-auto max-h-96">

                            </div>
                            <div class="flex space-x-2">
                                <img src="/image/{{ Auth::user()->avatar}}" class="w-9 h-9 rounded-full" alt="">
                                <div class="flex flex-1 bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between bg-transparent px-3">
                                    <form  class="w-full">
                                        <input type="text" name="comment" onkeypress="handle(event)" id="{{$value->id}}"  class=" user_comment w-full outline-none bg-transparent flex-1" placeholder="Write a comment">
                                    </form>
                                    
                                    <div class="flex space-x-0 items-center justify-center ">
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-wink-smile"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-camera"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-gift"></i></span>
                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                            <i class="bx bx-happy-heart-eyes"></i></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            <!-- END POST -->
        </div>
        <!--  END LIST POST -->
    </div>