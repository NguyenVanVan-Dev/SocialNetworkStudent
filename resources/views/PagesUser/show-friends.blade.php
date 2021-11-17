@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end  w-full">
    <!-- LEFT FRIEND MENU -->
    @include('Component.left-friends-menu')
    <!--  END LEFT FRIEND MENU -->
    <!-- MID CONTENT -->
    <div class=" w-full relative right-0 top-0  md:block sm:w-3/5  lg:w-8/12 xl:w-9/12  pt-32 lg:pt-16 px-4 bg-gray-100" >
        <div class="flex justify-between items-center p-4">
            <h2 class="text-2xl font-semibold">Request Friends</h2>
            <div>
                <span class=" grid place-content-center p-3 text-lg cursor-pointer text-blue-400">See all</span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3 px-4 pb-4">
            <?php
                use App\http\Controllers\UsersController;
            ?>
            @if(!empty($friends))  
                @foreach ($friends as $key => $listfriend)
                    @if(UsersController::statusFriend(Auth::user()->id,$listfriend->id) == 'RequestFriend')
                        <div class=" shadow-lg rounded-lg bg-white overflow-hidden " id="request-{{ $listfriend->id}}">
                            <a href="{{URL::TO('/viewuser/'.$listfriend->id)}}">
                                <div class="bg-gray-700 opacity-80">
                                    <img src="{{URL::to('/image/'. $listfriend->avatar)}}" alt="" class="w-full h-52 rounded-t-lg object-cover">
                                </div>
                                <div class="p-3 pb-0 ">
                                    <span class="font-semibold block name-friend">{{ $listfriend->name }}</span>
                                    <span class="font-semibold block text-base">Story: <span class="text-sm font-normal">{{ $listfriend->story }}</span></span>
                                </div>
                            </a>
                            <div class="p-3 ">
                                <button class="w-full p-2 text-md text-center font-medium bg-blue-500 text-white mb-2 rounded-md btn-acceptefriend " data-id="{{ $listfriend->id }}" id="btn-acceptefriend-{{ $listfriend->id }}">Accepte</button>
                                <button class="w-full p-2 text-md text-center font-medium  bg-gray-200 rounded-md btn-removerequest" data-id="{{$listfriend->id}}" id="btn-removerequest-{{$listfriend->id}}">Delete</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div class=" border-b border-gray-300 dark:border-dark-third mt-4"></div>
        <div class="flex justify-between items-center p-4">
            <h2 class="text-2xl font-semibold">People you may know</h2>
            <div>
                <span class=" grid place-content-center p-3 text-lg cursor-pointer text-blue-400">See all</span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3 px-4 pb-4">
            
            @if(!empty($friends))  
                @foreach ($friends as $key => $listfriend)
                   @if(UsersController::statusFriend(Auth::user()->id,$listfriend->id) != 'Pending' && UsersController::statusFriend(Auth::user()->id,$listfriend->id) != 'Accepted' && UsersController::statusFriend(Auth::user()->id,$listfriend->id) != "RequestFriend")
                   <div class=" shadow-lg rounded-lg bg-white overflow-hidden " id="item-{{$listfriend->id}}">
                        <a href="{{URL::TO('/viewuser/'.$listfriend->id)}}">
                            <div class="bg-gray-700 opacity-80">
                                <img src="{{URL::to('/image/'. $listfriend->avatar)}}" alt="" class="w-full h-52 rounded-t-lg object-cover">
                            </div>
                            <div class="p-3 pb-0 ">
                                <span class="font-semibold block">{{ $listfriend->name }}</span>
                                <span class="font-semibold block text-base">Story: <span class="text-sm font-normal">{{ $listfriend->story }}</span></span>
                            </div>
                        </a>
                        <div class="p-3 " id="action_friends">
                            <button class="w-full p-2 text-md text-center font-medium bg-blue-500 text-white mb-2 rounded-md btn-addfriend" data-id="{{$listfriend->id}}" id="btn-addfriend-{{$listfriend->id}}">Add Friend</button>
                            <button class="w-full p-2 text-md text-center font-medium  bg-gray-200 rounded-md">Delete,remove</button>
                        </div>
                    </div>
                   @endif    
                @endforeach
            @endif

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
    // ADD FRIEND
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
                        let btn_friend = '<button class="w-full p-2 text-md text-center font-medium bg-blue-500 text-white mb-2 rounded-md btn-unrequest" data-id="'+toID+'" id="btn-unrequest-'+toID+'"><span class="flex items-center dark:bg-dark-third rounded-md  px-3 py-2  dark:text-dark-txt text-blue-500 bg-blue-100"><i class="bx bxs-user-check text-2xl mr-2"></i>Undo Request </span></button>'
                        $('#item-'+toID+' #action_friends').prepend(btn_friend);
                    },
            })
        }
    });
    // END ADD FRIEND
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
                            $('#btn-unrequest-'+toID).addClass('hidden');
                            $('#btn-addfriend-'+toID).removeClass('pointer-events-none opacity-50 cursor-default ');
                            $('#btn-addfriend-'+toID).html(' ');
                            $('#btn-addfriend-'+toID).text('Add Friend');
                        }
                    },
            })
        }
    });
    //END UNREQUEST ADD FRIEND
    // ACCEPTED FRIEND
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
                        Notiflix.Report.Success('Accepted Notification',' Now you and "'+ $('#request-'+toID+' .name-friend').text()+'" are friends','Exit');
                        $('#request-'+toID).remove();
                    }
                    // alert(data.accepte)
                },
            })
        }
    })
    // END ACCEPTED FRIEND
    // REMOVE REQUEST FOR FRIEND
    $('body').on('click','.btn-removerequest',function(){
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
                            $('#request-'+toID).remove();
                        }
                    },
            })
        }
    }); 
    // END REMOVE REQUEST FOR FRIEND 
</script>
@endsection