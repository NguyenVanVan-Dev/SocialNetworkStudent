<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title> Soial NetWork Students</title>
    <link rel="shortcut icon" href="{{ asset('image/logo_md.png') }}" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
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

        .box_setting::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 30px;
            background-color: transparent;
            top: -20px;
            left: 0;
        }

        .mr-top {
            margin-top: 63vh;
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
</head>

<body id="app" class="bg-gray-100 dark:bg-dark-main  w-full ">
    <div class="loader">
        <div class="center-div">
            <div class="xoay"></div>
           <img src="/image/logo_md.png" alt="" class="loader__icon">
        </div>
    </div>
    <div id="post_content_profile" class=" flex items-center justify-center w-full  relative" >
        @include('Component.header')
        @yield('content')
    </div>
    @include('Component.form-post')
    <!-- EDIT PROFILE -->
    <div id="overlay_profile" class="fixed top-0 right-0 left-0 bottom-0 bg-gray-100 z-40 w-full h-full cursor-pointer bg-opacity-70 hidden "></div>
    <div id="form_profile" class="absolute w-700  z-50  bg-white rounded-md overflow-hidden box-border top-14 left-1/2 transform -translate-x-1/2 hidden">
        <div class="w-full p-5 border-b border-gray-300 relative text-center">
            <span class=" font-semibold text-2xl">Edit profile</span>
            <span id="btn_off_profile" class="text-3xl rounded-full bg-gray-200 cursor-pointer absolute right-3 top-3 hover:bg-gray-300 w-12 h-12">
                <i class='bx bx-x mt-2 '></i>
            </span>

        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center">
                <span class=" font-semibold text-2xl">The avatar</span>
                <span id="edit_avatar" class="text-xl rounded-md text-blue-500  px-2 py-1 hover:bg-gray-200 cursor-pointer">
                    Edit
                </span>
            </div>
            <div class="flex justify-center items-center">
                <img id="review_avatar" src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-52 h-52 rounded-full border-8 object-cover border-yellow-400 mx-0">
            </div>
        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center mb-2">
                <span class=" font-semibold text-2xl">The avatar cover </span>
                <span id="edit_cover_avatar" class="text-xl rounded-md text-blue-500  px-2 py-1 hover:bg-gray-200 cursor-pointer">
                    Edit
                </span>
            </div>
            <div class="flex justify-center items-center border-8 border-pink-400 rounded-lg">
                <img id="review_cover_avatar" src="{{URL::to('/image/'. Auth::user()->cover_avatar)}}" alt="" class="rounded-md h-56 w-full object-cover  m-10">
            </div>
        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center mb-2">
                <span class=" font-semibold text-2xl">Story </span>
                <span class="text-xl rounded-md text-blue-500  px-2 py-1 hover:bg-gray-200 cursor-pointer">
                    Edit
                </span>
            </div>
            <div class="">
                <textarea  id="story" name="story"  class=" p-3 w-full text-xl outline-none border-8 border-pink-400 rounded-lg"  rows="3" placeholder=" What's on your story, {{Auth::user()->name}}?">
                    {{Auth::user()->story}}
                </textarea>
            </div>
        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center">
                <span class=" font-semibold text-2xl">Edit Introduce </span>
            </div>
            <div class="flex justify-start items-center">
                <span class="my-2 flex  items-center"><i class='bx bx-paper-plane mr-2 text-2xl text-gray-500'></i> 1000 following </span>
            </div>
        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center mb-2">
                <span class=" font-semibold text-2xl">Interests </span>
            </div>
            <div >
                <textarea id="interests" name="interests" class=" p-3 w-full text-xl outline-none border-8 border-blue-400 rounded-lg"  rows="3" placeholder=" what's your hobby, {{Auth::user()->name}} ">
                {{Auth::user()->interests}}
                </textarea>  
            </div>
        </div>
        <div class=" p-4">
            <div class="flex justify-between items-center">
                <span class=" font-semibold text-2xl">Remarkable </span>
                <span class="text-xl rounded-md text-blue-500  px-2 py-1 hover:bg-gray-200 cursor-pointer">
                    Edit
                </span>
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('image/undraw_folder.svg') }}" alt="" class="rounded-md w-7/12  m-10">
            </div>
            <div class="flex justify-center items-center">
                <span class="text-gray-500 text-xl">Recommend photos and stories you like for all your friends to see.</span>
            </div>
        </div>
        <div class="p-4">
            <button id="submit_edit_profile"  class=" w-full outline-none bg-blue-200 text-blue-600 text-xl hover:bg-blue-300 p-2 rounded-lg"> Edit introduce information</button>
        </div>
    </div>
    <form action="" id="form_edit_profile" >
        @csrf
        <input type="file" name="avatar" id="profile_avatar" accept="image/*" style="display: none;">
        <input type="hidden" name="story" id="profile_story">
        <input type="hidden" name="interests" id="profile_interests">
        <input type="hidden" name="id" id="profile_id" value="{{ Auth::user()->id }}">
        <input type="file" name="cover_avatar" accept="image/*" id="profile_cover_avatar" style="display: none;">
    </form>
    <form action="{{ route('add_comment')}}" method="post" id="formComment" class="w-full hidden">
        @csrf
        <input type="hidden" name="post_id" id="post_id" value="">
        <input type="hidden" name="comment" id="user_comment">
    </form>
    <!-- END EDIT PROFILE -->
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="{{ asset('js/notiflix-aio-1.9.1.min.js') }}"></script>
    <script >
        var userName = '{{ Auth::user()->name }}';
        var userID = '{{ Auth::user()->id }}';
        var userAvatar = '{{ Auth::user()->avatar }}';
        var urlPosts = '{{ route('posts.store')}}';
        var showProfileFriend = '{{ route('profile_friends')}}';
        var addComment = '{{ route('add_comment')}}';
        var showComment = '{{ route('show_comment')}}';

        function handle(e){
            if(e.keyCode === 13){
                e.preventDefault();
                $('#user_comment').val(e.target.value);
                $('#post_id').val(e.target.id);
                if( $('#user_comment').val() != '')
                {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
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
        $('#edit_avatar').on('click',function(){
            $('#profile_avatar').trigger('click');
        });
        $('#edit_cover_avatar').on('click',function(){
            $('#profile_cover_avatar').trigger('click');
        });
        $('#submit_edit_profile').on('click',function(){
            $('#form_edit_profile').submit();
        })
        $('#profile_avatar').on('change',function(){
            const file =  $('#profile_avatar')[0].files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    $('#review_avatar').attr('src',result);
                }
                reader.readAsDataURL(file);
            }
        })
        $('#profile_cover_avatar').on('change',function(){
            const file =  $('#profile_cover_avatar')[0].files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    $('#review_cover_avatar').attr('src',result);
                }
                reader.readAsDataURL(file);
            }
        })
        $('#form_edit_profile').on('submit',function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $('#profile_story').val($('#story').val());
            $('#profile_interests').val($('#interests').val());
            console.log($('#profile_story').val());
            $.ajax({
                url : "{{ route('profile_update')}}",
                type : 'POST',
                data : new FormData(this),
                processData: false,
                contentType: false,
                success : function(msg) {
                    console.log(msg)
                    if( msg.success  == 'true')
                    {
                        Notiflix.Report.Success('Edit Profile Notification',' Your information has been edited successfully','Exit');
                        $('#form_profile').addClass('hidden')
                        $('#overlay_profile').addClass('hidden')
                        $("#post_content_profile").addClass('relative')
                        $("#post_content_profile").removeClass('fixed')
                        $('#story_user').text(msg.story);
                        if(msg.avatar == 'true'){
                            const file =  $('#profile_avatar')[0].files[0];
                            if(file){
                                const reader = new FileReader();
                                reader.onload = function(){
                                    const result = reader.result;
                                    $('#avatar_user').attr('src',result);
                                    $('#nav_avatar').attr('src',result);
                                }
                                reader.readAsDataURL(file);
                            }
                        }
                        if(msg.cover_avatar == 'true'){
                            const fileOne =  $('#profile_cover_avatar')[0].files[0];
                            if(fileOne){
                                const reader = new FileReader();
                                reader.onload = function(){
                                    const result = reader.result;
                                    $('#cover_avatar_user').attr('src',result);
                                }
                                reader.readAsDataURL(fileOne);
                            }
                        }
                    }
                    else if(msg.success  == 'false')
                    {
                        Notiflix.Report.Failure( msg.title,'Your information has failed to correct', 'Exit');
                    }
                   
                }
            })
        });
    </script>
</body>

</html>