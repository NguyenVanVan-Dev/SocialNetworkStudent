@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end  w-full">
    <!-- LEFT MENU -->
    @include('Component.left-menu-list-friend')
    <!--  END LEFT MENU -->
    <!-- MID CONTENT -->
    <div class="w-full relative right-0 top-0 xl:w-9/12  pt-32 lg:pt-16 px-4 bg-gray-100" id="profile-friend">
        <div class="flex justify-center items-center h-screen">
            <div class="flex flex-col justify-center items-center">
                <div class="text-center m-auto">
                    <img src=" {{URL::to('/image/undraw_people.svg')}}" class="m-auto rounded-md w-3/5 h-2/5 object-cover" alt="">
                </div>
                <h3 class=" font-semibold text-xl text-gray-800">Select the name of the person you want to preview the profile.</h3>
            </div>
        </div>
    </div>
    <!-- END MID CONTENT-->
    
</div>

<!--  END MAIN CONTENT -->
<!-- <script>
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
</script> -->
@endsection