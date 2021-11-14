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
        
    </style>
</head>

<body id="app" class=" dark:bg-dark-main relative overlay flex items-center justify-center ">
    <!-- FORM POST MODAL -->
    <div id="overlay" class="absolute w-full h-full bg-gray-200 z-40 bg-opacity-70 hidden">
    </div>
    <div id="form_post" class="absolute z-50 w-2/6  flex items-center justify-center hidden">
        <div  class="w-full bg-white rounded-xl shadow-2xl ">
            <div class="w-full p-5 border-b border-gray-300 relative text-center">
                <span class=" font-semibold text-2xl">Create post</span>
                <span id="btn_off_form_post" class="text-3xl rounded-full bg-gray-200 absolute right-3 top-3 hover:bg-gray-300 w-12 h-12">
                    <i class='bx bx-x mt-2 '></i>
                </span>
                
            </div>
            <div class="p-4">
                <div class="flex items-center mb-4">
                    <div class="">
                        <img src="{{ asset('image/story-1.png') }}" alt="" class="rounded-full w-12 h-12 ">
                    </div>
                    <div class="ml-4 text-center">
                        <span class="font-semibold text-xl">Nguyễn Văn Vấn</span>
                       <div class="bg-gray-200 rounded-md p-1">
                        <i class='bx bxs-group'></i>
                        <span class="text-gray-800 "> Friends except... </span>    

                       </div>
                    </div>
                </div>
                <textarea id="content_post" class="w-full text-xl outline-none" name="" id=""  rows="6" placeholder=" What's on your mind, Van?" ></textarea>
                <div class=" flex justify-between items-center">
                    <img src="{{ asset('image/bg-post.png') }}" alt="" class=" cursor-pointer rounded-full w-12 h-12 ">
                    <i class='bx bx-smile text-3xl text-gray-500 cursor-pointer '></i>
                </div>
                <div class="border-2 rounded-md border-gray-300 p-3 mt-4 flex justify-between items-center">
                    <span class="font-semibold text-xl"> Add to post</span>
                    <ul>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-green-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bx-images'></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-yellow-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bxs-user-plus'></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-blue-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bx-smile' ></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-purple-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bxs-edit-location' ></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-red-500 hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bxs-microphone'></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl  hover:bg-gray-300 w-10 h-10 rounded-full">
                                <i class='bx bx-dots-horizontal-rounded' ></i>
                            </span>
                        </li>
                    </ul>
                </div>
                <button class="w-full bg-gray-200 cursor-not-allowed mt-4 p-2 rounded-lg">
                    <span class="text-center font-semibold text-2xl text-gray-500 ">Post</span>
                </button>
            </div>
        </div>
    </div>
    <!-- END  FORM POST MODAL -->
    @include('Component.header')
    @yield('content')

    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>