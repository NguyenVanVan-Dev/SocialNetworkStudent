    <!-- FORM POST MODAL -->
    <div id="overlay" class="absolute w-full h-full bg-gray-200 z-40 bg-opacity-70 hidden"></div>
    <div id="form_post" class="absolute z-50 w-2/3 md:w-2/3 lg:w-3/5 xl:w-100/45  flex items-center justify-center hidden">
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
                        <img src="{{URL::TO('/image/'. Auth::user()->avatar)}}" alt="" class="rounded-full w-12 h-12 ">
                    </div>
                    <div class="ml-4 text-center">
                        <span class="font-semibold text-xl">{{Auth::user()->name}}</span>
                       <div class="bg-gray-200 rounded-md p-1">
                        <i class='bx bxs-group'></i>
                        <span class="text-gray-800 "> Friends except... </span>    

                       </div>
                    </div>
                </div>
                <textarea id="contentPosts" class="w-full text-xl outline-none" name="content"  rows="6" placeholder=" What's on your mind, {{Auth::user()->name}}?" ></textarea>
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
                <button class="w-full bg-gray-200 cursor-not-allowed mt-4 p-2 rounded-lg text-gray-500" id="btnPosts">
                    <span class="text-center font-semibold text-2xl  ">Post</span>
                </button>
            </div>
        </div>
    </div>
    
 <!-- END  FORM POST MODAL -->