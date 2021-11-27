<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title> Soial NetWork Students</title>
    <link rel="shortcut icon" href="{{ asset('image/logo_md.png') }}" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/notiflix-aio-1.9.1.min.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 4px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #BCC0C4;
            border-radius: 4px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #BCC0C4;
        }

        .btn_friend:focus .box_friend,
        .btn_messenger:focus .box_messenger {
            display: block;
        }
        .box_setting::after{
            content: "";
            position: absolute;
            width: 100%;
            height: 30px;
            background-color: transparent;
            top:-20px;
            left: 0;
        }
        /* #video-call-div {
            position: absolute;
            top: 65px;
            width: 75%;
            height: 90%;
            display: none;
        }

        #local-video {
            position: absolute;
            top: 0;
            left: 0;
            margin: 16px;
            border-radius: 16px;
            max-width: 20%;
            max-height: 20%;
            background: #ffffff;
        }

        #remote-video {
            background: #000000;
            width: 100%;
            height: 100%;
        }

        .call-action-div {
            position: absolute;
            left: 50%;
            transform: translate(-50%,-50%);
            bottom: 32px;
        } */

    </style>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
   
</head>

<body id="app" class="bg-gray-200 dark:bg-dark-main relative overlay flex items-center justify-center w-full ">
    
    @include('Component.form-callvideo')
    @include('Component.form-post')
    @include('Component.header')
    @yield('content')
    <div class="hidden">
        <audio controls  class="audio_messenger">
        <source src="/image/tin-nhan.mp3" type="audio/ogg">
        <source src="/image/tin-nhan.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
    </div>
    <div class="hidden">
        <audio controls  class="audio_call">
        <source src="/image/nhac-chuong-oppo.mp3" type="audio/ogg">
        <source src="/image/nhac-chuong-oppo.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
    </div>
    <div id="video-call-div" class=" w-3/4 h-80% fixed top-16 rounded-lg overflow-hidden hidden">
        <button id="zoom-out" class="z-50 absolute top-4 right-4 bg-gray-500 outline-none p-1 rounded-lg">zoom out</button>
        <video muted id="local-video" autoplay class="absolute top-0 left-0 m-4  rounded-lg max-h-1/4 bg-gray-500"></video>
        <video id="remote-video" autoplay class="w-full h-full bg-gray-300"></video>
        <div class="call-action-div absolute bottom-9 left-1/2 transform -translate-x-1/2">
            <button onclick="muteVideo()"  class="bg-green-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Mute Video</button>
            <button onclick="muteAudio()"  class="bg-yellow-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Mute Audio</button>
            <button onclick="closeVideo()" class="bg-red-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Leave Call</button>
        </div>
        <button id="zoom-in" class=" hidden absolute top-4 right-4 bg-gray-500 outline-none p-1 rounded-lg">zoom in</button>
    </div>
    <button class="openVideoCall hidden"></button>
    <form action="{{ route('add_comment')}}" method="post" id="formComment" class="w-full hidden">
        @csrf
        <input type="hidden" name="post_id" id="post_id" value="">
        <input type="hidden" name="comment" id="user_comment">
    </form>
    <script>
        var userName = '{{ Auth::user()->name }}';
        var userID = '{{ Auth::user()->id }}';
        var callID = '{{ Auth::user()->user_id }}';
        var userAvatar = '{{ Auth::user()->avatar }}';
        var urlPosts = ' {{ route('posts.store')}}';
        var showProfileFriend = '{{ route('profile_friends')}}';
        var addComment = '{{ route('add_comment')}}';
        var showComment = '{{ route('show_comment')}}';
        var routeCallvideo = "{{ route('call_video')}}";
        $('#zoom-out').click(function(){
            $('#video-call-div').addClass(' w-1/5 h-1/5 top-3/4 left-4/5');
            $('#video-call-div').removeClass('h-80%');
            $('#local-video').addClass('hidden');
            $('.call-action-div').addClass('hidden');
            $(this).addClass('hidden');
            $('#zoom-in').removeClass('hidden');
        })
        $('#zoom-in').click(function(){
            $('#video-call-div').removeClass(' w-1/5 h-1/5 top-3/4 left-4/5');
            $('#video-call-div').addClass('h-80%');
            $('#local-video').removeClass('hidden');
            $('.call-action-div').removeClass('hidden');
            $(this).removeClass('hidden')
            $('#zoom-out').removeClass('hidden');
        })
        $('body').on('click','.openVideoCall', function(e){
            e.stopPropagation();
            $("#app").addClass('fixed')
            $("#app").removeClass('relative')
            $('#callModal').removeClass('invisible');
            $('#boxVideoCall').removeClass('-translate-y-64');
            $('#boxVideoCall').addClass('translate-y-0');
            $('#boxVideoCall').removeClass('opacity-0');
        });
        $('#testMes').click(function(){
           $(".audio_messenger").trigger('play');
        })
        $('#testCall').click(function(){
           $(".audio_call").trigger('play');
        })
        
        $('body').on('click','#MuteNotifi', function(){
            var $audio = $('.audio_messenger');
            var $call =  $(".audio_call");
            $('#MuteNotifi span').toggleClass("hidden");
            if( $(".audio_messenger").prop('muted') )
            {
                $(".audio_messenger").prop('muted', false);
            }

            else {
            $(".audio_messenger").prop('muted', true);
            }
            // $('.audio_messenger').prop('muted', true);
           
        })
        $('.closeVideoCall').on('click', function(e){
            e.stopPropagation();
            $("#app").addClass('relative')
            $("#app").removeClass('fixed')
            $('#boxVideoCall').removeClass('translate-y-0');
            $('#boxVideoCall').addClass('-translate-y-64');
            $('#boxVideoCall').addClass('opacity-0');
            setTimeout(() => {
                $('#callModal').addClass('invisible');
            }, 100);
        });
        function handle(e){
            if(e.keyCode === 13){
                e.preventDefault();
                $('#user_comment').val(e.target.value);
                $('#post_id').val(e.target.id);
                if( $('#user_comment').val() != '')
                {
                    $.ajax({
                        url:'{{ route('add_comment')}}',
                        method:"POST",
                        data : $('#formComment').serialize(),
                        
                        success:function(data)
                        {
                            let comment = ' <div class="flex space-x-2 "><img src="/image/{{ Auth::user()->avatar}}" alt="" class="w-9 h-9 rounded-full"><div><div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm"><span class="font-semibold block">{{Auth::user()->name}}</span><span>'+ data.data.content+' </span></div><div class="p-2 text-xs text-gray-500 dark:text-dark-txt "><span class="font-semibold cursor-pointer">Like </span><span>. </span><span class="font-semibold cursor-pointer"> Reply </span><span> . </span>10m</div></div></div>';
                           $('#commentPost-'+data.data.post_id).append(comment);
                           $('.user_comment').val('');
                        },
                    })
                }
            }
        }
        
        // Handle Conversition Chat
        var receiver_id = ''

        $('.showConversition').click(function(){
            $('.showConversition').removeClass('bg-blue-100')
            $('.showConversition').addClass('hover:bg-gray-100 dark:hover:bg-dark-third');
            $(this).removeClass('hover:bg-gray-100 dark:hover:bg-dark-third');
            $(this).addClass('bg-blue-100');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('data-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                    url:"{{ route('get_messages')}}",
                    method:"GET",
                    data : {
                        receiver_id:receiver_id
                    },
                    success:function(data)
                    {
                        // console.log(data)
                        $("#Conversition").html(data);
                        $('.name-'+receiver_id).removeClass('font-medium');
                        scrollToBottomFunc();
                    },
                })
        })
        function sendMessage(e){
            var message = e.target.value;
            if(e.keyCode === 13&& message != '' && receiver_id != ''){
                e.preventDefault(); 
                $.ajax({
                    url:"{{ route('send_messages')}}",
                    method:"POST",
                    data :{
                        message:message,
                        receiver_id:receiver_id,
                    },
                    
                    success:function(data)
                    {
                        // let itemMessage = '<div class="relative flex justify-start items-center py-4 self-end mr-4">\
                        //                 <div class="absolute -top-1 right-14 text-sm text-gray-700">You</div>\
                        //                 <div class="mr-4 rounded-xl rounded-br-none p-2 max-w-sm bg-blue-500 text-white">\
                        //                     <span class="text-base font-normal">\
                        //                         '+data.data.message+'\
                        //                     </span>\
                        //                     <div class=" bottom-0 left-14">\
                        //                         <span class="text-sm "> '+data.data.created_at+'</span>\
                        //                     </div>\
                        //                 </div>\
                        //                 <img src="/image/{{ Auth::user()->avatar}}" alt="" class="w-10 h-10 rounded-full object-cover">\
                        //             </div>';
                        // $('#box_chats').append(itemMessage);
                        $('.send_message').val(' ');
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
                
            }
        }
        Pusher.logToConsole = true;

        var pusher = new Pusher('940b42e0ef80acc67c95', {
        cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            console.log(data.id_userCalled)
            console.log(callID);
            if(userID == data.id_userFrom){
                // send message
                $('#conversition-'+data.id_userTo).click();
            }else if(userID == data.id_userTo)
            {
                //receiver massage
                $(".audio_messenger").trigger('play');
                if (receiver_id == data.id_userFrom) {
                    // if receiver is selected, reload the selected user ...
                    $('#conversition-'+data.id_userFrom).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#conversition-' + data.id_userFrom).find('.pending').html());
                    if (pending) {
                        $('#conversition-' + data.id_userFrom).find('.pending').html(pending + 1);
                        $('.name-'+data.id_userFrom).addClass('font-medium');
                    } else {
                        $('#notification-' + data.id_userFrom).append(' <span class="bg-red-500  rounded-full absolute -right-2 -top-1 w-5 h-5 flex items-center justify-center text-white pending">1</span>');
                        $('.name-'+data.id_userFrom).addClass('font-medium');
                    }
                }
            }else if(data.id_userCalled ==  callID)
            {
                // let info = JSON.parse(data.info_userCall);
                console.log();
                $(".audio_call").trigger('play');
                $('.openVideoCall').click();
                $('#nameFriendCall').text(data.info_userCall.name)
                $('#avatarFriendCall').attr("src","/image/"+data.info_userCall.avatar);
            }
        });
        function scrollToBottomFunc() {
            console.log($('.conversition').get(0).scrollHeight)
        $('.conversition').animate({
            scrollTop: $('.conversition').get(0).scrollHeight
        }, 50);
    }
        // End Handle Conversition Chat
    </script>
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="{{ asset('js/video-call.js') }}"></script>
</body>

</html>