@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end h-screen">
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
            use App\http\Controllers\UsersController;
            
            ?>
           
            @if(!empty($users))  
                @foreach ($users as $key => $search_user)
                    <li class="m-4">
                        <div class="flex justify-between items-center space-x-4 p-4 bg-white 
                         dark:text-dark-txt rounded-lg">
                            <div class="flex flex-1">
                                <img src=" {{URL::to('/image/'.$search_user->avatar)}}" class="rounded-full w-14 h-14 object-cover" alt="">
                                <div class="ml-4">
                                    <span class="font-semibold block text-lg"> 
                                        <a href="{{URL::TO('/viewuser/'.$search_user->id)}}" class="hover:underline text-black">{{ $search_user->name }}</a>
                                    </span>
                                    <span class="text-sm block"> Trường Đại học CNTT và Truyền thông Việt Hàn - VKU</span>
                                </div>
                            </div>
                            <div class="flex items-center"> 
                                <div class="text-2xl grid place-items-center  bg-gray-200 hover:text-purple-500
                                dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-100
                                dark:text-dark-txt">
                                    <i class='bx bxl-messenger'></i>
                                </div>
                                @if(UsersController::statusFriend(Auth::user()->id,$search_user->id) == 'Pending')
                                <div class=" grid place-items-center btn-addfriend pointer-events-none opacity-50 cursor-default" >
                                    <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  dark:text-dark-txt text-blue-500 bg-blue-100">
                                        <i class="bx bxs-user-check text-2xl mr-2"></i>Request Send
                                    </span>
                                </div>
                                @elseif(UsersController::statusFriend(Auth::user()->id,$search_user->id) == 'Accepted')
                                <div class=" grid place-items-center btn-unfriend " data-id="{{ $search_user->id }}" id="btn-unfriend-{{ $search_user->id }}" >
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
<!--  END MAIN CONTENT -->
<script>
    // ADD FRIENDS
    $('.btn-addfriend').click(function(){
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
                        $('#btn-addfriend-'+toID).html(' <span class="flex items-center dark:bg-dark-third rounded-md mx-3 px-3 py-2  dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user-check text-2xl mr-2"></i>Request Send</span>');
                    },
            })
        }
    });
    $('.btn-acceptefriend').click(function(){
        let toID = $(this).data('id');
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
                    alert(data.accepte)
                },
            })
        }
    })
    
    // END ADD FRIENDS
</script>
@endsection