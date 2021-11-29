@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end  w-full">
    <!-- LEFT FRIEND MENU -->
    @include('Component.left-story-menu')
    <!--  END LEFT FRIEND MENU -->
    <!-- MID CONTENT -->
    <div class=" w-full relative right-0 top-0  md:block sm:w-3/5  lg:w-8/12 xl:w-9/12  pt-32 lg:pt-16 px-4 bg-gray-100" >
        <div class="flex justify-between items-center p-4">
            <h2 class="text-2xl font-semibold">All the Story</h2>
            <div>
                <span class=" grid place-content-center p-3 text-lg cursor-pointer text-blue-400">See all</span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3 px-4 pb-4" id="listStory">
            <?php
                use App\http\Controllers\UsersController;
            ?>
            @if(!empty($stories))
                @foreach($stories as $key => $value)   
                    @if(UsersController::statusFriend(Auth::user()->id,$value->user_id) == 'Accepted' || $value->user_id == Auth::user()->id)
                    <?php $info = UsersController::getInfoUser($value->user_id);?> 
                    <div class="w-full h-96 rounded-lg shadow-md overflow-hidden" id="Story-{{$value->id}}">
                        <div class="relative h-full group cursor-pointer">
                            @if(!empty($value->image))
                            <img src="{{ asset('image/'.$value->image ) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                            @endif
                            @if(!empty($value->video))
                                <video controls class="mx-auto w-full absolute top-36 z-10 bg-gray-500" >
                                    <source  src="{{URL::to('/image/'. $value->video )}}" type="video/mp4">
                                    <source src="{{URL::to('/image/'. $value->video )}}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                            <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                            <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                               {{ $info->name }}
                            </span>
                            <div class=" rounded-full overflow-hidden absolute top-4 bg-gray-50 opacity-30 right-2 border border-yellow-500 transform -rotate-45 ">
                                <span class="text-black font-medium p-1 ">{{ $value->content}}</span>
                            </div>
                            <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                                <img src="{{ asset('image/'.$info->avatar) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700  h-full w-full object-cover" alt="">
                            </div>
                            @if($value->user_id == Auth::user()->id)
                            <div class=" absolute bottom-2 right-2">
                                <span data-id="{{$value->id }}" class="deleteStory grid place-content-center rounded-full p-2 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bx-cog'></i></span>
                                <div class="absolute bottom-full right-0 w-40 hidden dropStory " id="deleteStory-{{$value->id }}"> 
                                    <ul>
                                        <li>
                                            <div class="p-2 bg-white rounded-md border-b border-gray-200 btnDelStory" data-id="{{$value->id }}"> 
                                                <span> Delete Story</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif    
        </div>
        <div class=" border-b border-gray-300 dark:border-dark-third mt-4"></div>
       
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

@endsection