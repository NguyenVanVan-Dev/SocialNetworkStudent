@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<?php   use App\http\Controllers\UsersController;  ?>
<div class="flex justify-end h-screen w-full">
    <!-- LEFT MENU -->
    <div class="w-3/12 pt-16 h-full hidden xl:flex flex-col fixed top-0 left-0 shadow-md overflow-y-scroll">
        <ul class="p-4 ">
            <li>
                <a href="{{URL::TO('/profile/'. Auth::user()->id)}}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold block">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('show_friends') }}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
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
                    <span class="font-semibold block">Emotional Health </span>
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
                        <i class='bx bx-chevron-up'></i>
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
     <div class="w-full relative right-0 top-0 xl:w-9/12  pt-32 lg:pt-16 px-2 ">
        <!-- STORY -->
        <div class="relative flex space-x-2 pt-4">
            <div class="w-1/4 sm:w-1/5 h-80 rounded-lg shadow-md overflow-hidden bg-white flex flex-col group cursor-pointer">
                <div class="h-4/6 overflow-hidden">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" class="group-hover:transform object-cover group-hover:scale-110 transition-all duration-700" alt="">
                </div>
                <a href="{{ route('stories.create')}}" class="flex-1">
                <div class=" relative flex items-center justify-center pb-2 text-center
                    leading-none dark:bg-dark-second dark:text-dark-txt">
                        <span class="font-semibold mt-9">
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
                    <div class="w-full h-80 rounded-lg shadow-md overflow-hidden">
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

        </div>
        <!--  END STORY -->
        <div class=" flex space-x-2 pt-4 w-3/4 m-auto">
            <ul class="pt-2 w-full">
            <?php
            $name = Session::get('message');
            if(!empty($name)){
                echo  ' <li class=" m-4 text-gray-500 text-center font-semibold text-xl bg-gray-200 p-4 rounded-md ">User name <span class="text-red-400 ">"'.$name.'"</span> not found</li>
                <img src="/image/undraw_people.svg" class="rounded-md  object-cover" > ';
            }
            ?>
           
            @if(!empty($users))  
                @foreach ($users as $key => $search_user)
                    <li class="m-4" id="item-{{$search_user->id}}">
                        <div class="flex justify-between items-center space-x-4 p-4 bg-white 
                         dark:text-dark-txt rounded-lg">
                            <div class="flex flex-1">
                                <img src=" {{URL::to('/image/'.$search_user->avatar)}}" class="rounded-full w-14 h-14 object-cover" alt="">
                                <div class="ml-4">
                                    <span class="font-semibold block text-lg"> 
                                        <a href="{{URL::TO('/view-user/'.$search_user->id)}}" class="hover:underline text-black name_friend">{{ $search_user->name }}</a>
                                    </span>
                                    <span class="text-sm block"> Trường Đại học CNTT và Truyền thông Việt Hàn - VKU</span>
                                </div>
                            </div>
                            <div class="flex items-center" id="action_friends"> 
                                <div class="text-2xl grid place-items-center  bg-gray-200 hover:text-purple-500
                                dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-100
                                dark:text-dark-txt">
                                    <i class='bx bxl-messenger'></i>
                                </div>
                                @if(UsersController::statusFriend(Auth::user()->id,$search_user->id) == 'Pending')
                                <div class=" grid place-items-center btn-unrequest" data-id="{{$search_user->id}}" id="btn-unrequest-{{$search_user->id}}" >
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2 cursor-pointer dark:text-dark-txt text-blue-500 bg-blue-100">
                                        <i class="bx bxs-user-check text-2xl mr-2"></i>Undo Request
                                    </span>
                                </div>
                                <div class=" grid place-items-center btn-addfriend hidden" data-id="{{ $search_user->id }}" id="btn-addfriend-{{ $search_user->id }}">
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  cursor-pointer dark:text-dark-txt bg-gray-100">
                                        <i class="bx bxs-user-check text-2xl mr-2"></i>Add Frined
                                    </span>
                                </div>  
                                @elseif(UsersController::statusFriend(Auth::user()->id,$search_user->id) == 'Accepted')
                                <div class=" grid place-items-center btn-unfriend openModal " data-id="{{ $search_user->id }}" id="btn-unfriend-{{ $search_user->id }}" >
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2 cursor-pointer dark:text-dark-txt text-blue-500 bg-blue-100">
                                        <i class="bx bxs-user text-2xl mr-2"></i>Friend
                                    </span>
                                </div>
                                @elseif(UsersController::statusFriend(Auth::user()->id,$search_user->id) == 'RequestFriend')
                                <div class=" grid place-items-center btn-acceptefriend " data-id="{{ $search_user->id }}" id="btn-acceptefriend-{{ $search_user->id }}" >
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2 cursor-pointer dark:text-dark-txt text-blue-500 bg-blue-100">
                                        <i class="bx bxs-user text-2xl mr-2"></i>Accepted Request
                                    </span>
                                </div>
                                @else
                                <div class=" grid place-items-center btn-addfriend" data-id="{{ $search_user->id }}" id="btn-addfriend-{{ $search_user->id }}">
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  cursor-pointer dark:text-dark-txt bg-gray-100">
                                        <i class="bx bxs-user-check text-2xl mr-2"></i>Add Frined
                                    </span>
                                </div>
                                @endif

                            </div>
                          
                        </div>
                    </li>
                @endforeach
            @endif
           
           
            </ul>
        </div>
    </div>
    <!-- END MID CONTENT-->
    
</div>
 <!-- This example requires Tailwind CSS v2.0+ -->
 <div class="fixed z-50 inset-0 invisible overflow-y-auto transition ease-out duration-500 transform " aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div id="boxModal" class=" -translate-y-64 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition ease-out duration-500 sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Remove Friend Notification
                            </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 text-center">
                                Are you sure you want to unfriend this user.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="btnRemoveFriend" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Remove
                </button>
                <button type="button" class="closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
<!--  END MAIN CONTENT -->
<script>
    // ADD FRIENDS
    $('body').on('click','.btn-addfriend',function(){
        let toID = $(this).data('id');
        let action = 'send_request';
        if(toID >0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{ route('handleFriend')}}",
                method:"POST",
                data : {
                            toID: toID,
                            action:action
                        },
                    beforeSend:function()
                    {
                        $('#btn-addfriend-'+toID).addClass('pointer-events-none opacity-50 cursor-default ');
                        $('#btn-addfriend-'+toID).html(' <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2   dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user-check text-2xl mr-2"></i>Sending...</span>');
                    },
                    success:function(data)
                    {
                        $('#btn-addfriend-'+toID).addClass('hidden');
                        let btn_friend = '<div class=" grid place-items-center btn-unrequest" data-id="'+ toID +'" id="btn-unrequest-'+ toID+'" ><span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2 cursor-pointer dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user text-2xl mr-2"></i>Undo Request</span></div>'
                        $('#item-'+toID+' #action_friends').append(btn_friend);
                        // $('#btn-addfriend-'+toID).html(' <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user-check text-2xl mr-2"></i>Request Send</span>');
                    },
            })
        }
    });
    // END ADD FRIENDS
    // UNREQUEST ADD FRIEND
    $('body').on('click','.btn-unrequest',function(){
        let toID = $(this).data('id');
        let action = 'undo_request';
        if(toID >0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{ route('handleFriend')}}",
                method:"POST",
                data : {
                            toID: toID,
                            action:action
                        },
                    success:function(data)
                    {
                        if(data.status =='true')
                        {
                            $('#btn-addfriend-'+toID).removeClass('hidden');
                            $('#btn-unrequest-'+toID).remove();
                            $('#btn-addfriend-'+toID).removeClass('pointer-events-none opacity-50 cursor-default ');
                            $('#btn-addfriend-'+toID).html('<span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  cursor-pointer dark:text-dark-txt bg-gray-100"><i class="bx bxs-user-check text-2xl mr-2"></i>Add Frined</span>');
                        }
                    },
            })
        }
    });
    //END UNREQUEST ADD FRIEND
    $('.btn-acceptefriend').click(function(){
        let toID = $(this).data('id');
        console.log(toID);
        let action = 'accepte_request';
        if(toID >0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{ route('handleFriend')}}",
                method:"POST",
                data : {
                            toID: toID,
                            action:action
                        },
                
                success:function(data)
                {
                    if(data.accepte == 'true')
                    {
                        Notiflix.Report.Success('Accepted Notification',' Now you and "'+ $('#item-'+toID+' .name_friend').text()+'" are friends','Exit');
                        $('#btn-acceptefriend-'+toID).addClass('hidden');
                        let btn_friend = '<div class=" grid place-items-center btn-unfriend openModal" data-id="'+ toID +'" id="btn-unfriend-'+ toID+'" ><span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2 cursor-pointer dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user text-2xl mr-2"></i>Friend</span></div>'
                        $('#item-'+toID+' #action_friends').append(btn_friend);
                    }
                    // alert(data.accepte)
                },
            })
        }
    })
    $('body').on('click','.openModal', function(e){
        $('#interestModal').removeClass('invisible');
        $('#boxModal').removeClass('-translate-y-64');
        $('#boxModal').addClass('translate-y-0');
        $('#boxModal').removeClass('opacity-0');
        $('#interestModal').attr('data-id',$(this).data('id'));
    });
    $('.closeModal').on('click', function(e){
        $('#boxModal').removeClass('translate-y-0');
        $('#boxModal').addClass('-translate-y-64');
        $('#boxModal').addClass('opacity-0');
        setTimeout(() => {
            $('#interestModal').addClass('invisible');
        }, 300);
    });
    $('#btnRemoveFriend').click(function(){
        let toID = $('#interestModal').attr('data-id');
        console.log(toID);
        let action = 'remove_friend';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('handleFriend')}}",
            method:"POST",
            data : {
                        toID:toID ,
                        action:action
            },
            success:function(data){
                if(data.status == "true")
                {
                    Notiflix.Notify.Success('You have unfriended'+$('#item-'+toID+' .name_friend').text());
                    $('#btn-unfriend-'+toID).addClass('hidden');
                    let btn_add_friend = '<div class=" grid place-items-center btn-addfriend" data-id="'+toID+'" id="btn-addfriend-'+toID+'">\
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  cursor-pointer dark:text-dark-txt bg-gray-100">\
                                        <i class="bx bxs-user-check text-2xl mr-2"></i>Add Friend\
                                    </span>\
                                </div>'
                    $('#item-'+toID+' #action_friends').append(btn_add_friend);
                    $('.closeModal').trigger('click');
                }   
            },
        })
        
    });
    
</script>
@endsection