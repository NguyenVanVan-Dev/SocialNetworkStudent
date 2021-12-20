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
        /* Load Page  */
        .loader{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: rgba(244, 244, 245,1);
            z-index: 1000;
            display: block;
            overflow: hidden;
        }
        .center-div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
        }
        .xoay{
            display: flex;
            align-items: center;
            transform: translate(-50%,-50%);
            width: 202px;
            height: 200px;
            background: white;
            border-radius: 50%;
            border-right: 4px solid rgba(114, 33, 205, 0.8);
            animation: xoay 1.5s linear infinite;
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
        }
        .loader__icon{
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 3.4rem;
            color: red;
            transform: translate(-50%,-50%);
        }
        @keyframes xoay{
            0%{
                transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
        }
            100%{
                transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
        }
        }

    </style>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
   
</head>

<body id="app" class="preloading bg-gray-200 dark:bg-dark-main relative overlay flex items-center justify-center w-full ">
    <div class="loader">
        <div class="center-div">
            <div class="xoay"></div>
           <img src="/image/logo_md.png" alt="" class="loader__icon">
        </div>
     </div>
    @include('Component.form-callvideo')
    @include('Component.form-post')
    @include('Component.header')
    @yield('content')
    <div id="notifiBox" class="fixed top-14 right-0 rounded-md  bg-white overflow-hidden transition-all  transform  translate-x-full ">
        <div>
            <div class=" px-2 py-3 ">
                <a href="javascript:void(0)" class="">
                    <div class="flex items-center">
                        <div class="w-max mr-3">
                            <img id="avatarNotifi" src="{{ asset('image/anh-ysauo.jpg') }}" alt="" class="rounded-full w-11 h-11">
                        </div>
                        <div class="flex-auto">
                            <div class="flex items-center justify-between text-lg">
                                <span id="nameNotifi" class="font-semibold">Nguyễn Văn Vấn</span>
                                <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                            </div>
                            <div class="text-gray-500 text-sm flex justify-between items-center">
                                <div class="w-4/5 ">
                                    <p class="truncate w-56" id="contentNotifi">
                                        Xin chào các bạn mình là vấn best yasuo
                                    </p>
                                </div>
                                <div class="w-1/5">
                                    <span class="text-xs "> 1 phút </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
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
    <div id="video-call-div" class=" w-3/4 h-80% fixed top-16 rounded-lg z-30 overflow-hidden hidden" friend-id="0" my-id="0">
        <button id="zoom-out" class="z-50 absolute top-4 right-4 bg-gray-500 outline-none p-1 rounded-lg">zoom out</button>
        <video muted id="local-video" autoplay class="absolute top-0 left-0 m-4  rounded-lg max-h-1/4 bg-gray-500"></video>
        <video id="remote-video" autoplay class="w-full h-full bg-gray-300"></video>
        <div class="call-action-div absolute bottom-9 left-1/2 transform -translate-x-1/2">
            <button onclick="muteVideo()"  class="bg-green-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Mute Video</button>
            <button onclick="muteAudio()"  class="bg-yellow-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Mute Audio</button>
            <button id="closeVideo" class=" bg-red-500 rounded-lg p-2 text-lg text-white outline-none border border-white">Leave Call</button>
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
        var delPost = "{{ route('posts.destroy', Auth::user()->id )}}";
        var hidPost = "{{ route('posts.display')}}";
        var likePost = "{{ route('posts.update',Auth::user()->id)}}";
        var urlStory = ' {{ route('stories.store')}}';
        var yourStory = "{{ route('stories.show', Auth::user()->id )}}";
        var delStory = "{{ route('stories.destroy', Auth::user()->id )}}";
        var showProfileFriend = '{{ route('profile_friends')}}';
        var addComment = '{{ route('add_comment')}}';
        var showComment = '{{ route('show_comment')}}';
        var routeCallvideo = "{{ route('call_video')}}";
        var leaveCallVideo = "{{ route('leave_video')}}";
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
            if(userID == data.id_userFrom){
                // send message
                $('#conversition-'+data.id_userTo).click();
            }else if(userID == data.id_userTo)
            {
                $('#notifiBox').toggleClass('translate-x-full');
                $('#notifiBox').toggleClass('translate-x-0');
                $('#avatarNotifi').attr('src','/image/'+data.info_send.avatar);
                $('#nameNotifi').text(data.info_send.name);
                $('#contentNotifi').text(data.message);
                setTimeout(() => {
                    $('#notifiBox').toggleClass('translate-x-full');
                    $('#notifiBox').toggleClass('translate-x-0');
                }, 3000);
                //receiver massage
                $(".audio_messenger").trigger('play');
                if (receiver_id == data.id_userFrom) {
                    // if receiver is selected, reload the selected user ...
                    $('#conversition-'+data.id_userFrom).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#conversition-' + data.id_userFrom).find('.pending').html());
                    var notifiMes = parseInt($('#Messenger').find('.pending').text());
                    if (pending) {
                        $('#conversition-' + data.id_userFrom).find('.pending').html(pending + 1);
                        $('.name-'+data.id_userFrom).addClass('font-medium');
                    } else {
                        $('#notification-' + data.id_userFrom).append(' <span class="bg-red-500  rounded-full absolute -right-2 -top-1 w-5 h-5 flex items-center justify-center text-white pending">1</span>');
                        $('.name-'+data.id_userFrom).addClass('font-medium');
                    }
                    if(notifiMes)
                    {
                        $('#Messenger').find('.pending').html(notifiMes + 1 );
                    }else
                    {
                        $('#Messenger').append('<span id="notifiMes" class="pending absolute top-1/2 right-4 transform -translate-y-1/2 bg-red-500 rounded-full w-6 h-6 grid place-content-center text-white"> 1 </span>')
                    }
                }
            }else if(data.info_call.id_userCalled ==  callID && data.info_call.status == 'Request Call')
            {
                $("#video-call-div").attr('friend-id',data.id_userCalled)
                $(".audio_call").trigger('play');
                $('.openVideoCall').click();
                $('#nameFriendCall').text(data.info_userCall.name)
                $('#avatarFriendCall').attr("src","/image/"+data.info_userCall.avatar);
            }
            else if(data.info_call.who_leave !=  callID && data.info_call.status == 'Leave Call' )
            { 
                console.log(data.info_call.who_leave)
                console.log(callID)
                console.log(data.info_call.status)
                alert('disconnect call');
                window.location.reload(true);
            }
            $('#closeVideo').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: leaveCallVideo,
                    method:"GET",
                    data : {
                        id_call:data.id_call,
                        who_leave:callID,
                    },
                    
                    success:function(data)
                    {
                        if(data.status == 'true')
                        {
                        //    console.log('disconect call')
                            window.location.reload(true);
                        }
                        
                    },
                })
                // window.location.reload();
            })
        });
        
        function scrollToBottomFunc() {    
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