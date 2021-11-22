    <!-- FORM POST MODAL -->
<div class="fixed z-50 inset-0 invisible overflow-y-auto transition ease-out duration-500 transform  cursor-pointer" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="postModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity closePost" aria-hidden="true" id="overlayPost" style="height: 722px;"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div id="boxPost" class=" -translate-y-64 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition ease-out duration-500 sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div  class="w-full bg-white rounded-xl shadow-2xl ">
                    <div class="w-full p-5 border-b border-gray-300 relative text-center">
                        <span class=" font-semibold text-2xl">Create post</span>
                        <span class=" closePost text-3xl rounded-full bg-gray-200 absolute right-3 top-3 hover:bg-gray-300 w-12 h-12">
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
                        <div class="flex justify-center items-center">
                            <img id="review_image_post" src="#" alt="" class="max-w-52 max-h-52 object-cover  mx-0">
                            <input type="file" name="image" id="image_post" accept="image/*" style="display: none;">
                        </div>
                        <div class="video-post hidden">
                            <video   controls class="mx-auto w-full h-80">
                                <source id="review_video_post" src="#" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <input type="file" name="video" id="video_post" accept="video/*" style="display: none;">
                        </div>
                        <div class=" flex justify-between items-center">
                            <img src="{{ asset('image/bg-post.png') }}" alt="" class=" cursor-pointer rounded-full w-12 h-12 ">
                            <i class='bx bx-smile text-3xl text-gray-500 cursor-pointer '></i>
                        </div>
                        <div class="border-2 rounded-md border-gray-300 p-3 mt-4 flex justify-between items-center">
                            <span class="font-semibold text-xl"> Add to post</span>
                            <ul>
                                <li class="inline-block  ">
                                    <span class="grid place-items-center text-3xl text-green-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnImagePost">
                                        <i class='bx bx-images'></i>
                                    </span>
                                </li>
                                <li class="inline-block  ">
                                    <span class="grid place-items-center text-3xl text-yellow-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnVideoPost" >
                                        <i class='bx bxs-videos'></i>
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
        </div>
    </div>
</div>
    <!-- <div id="overlay" class="absolute w-full h-full bg-gray-200 z-40 bg-opacity-70 hidden"></div>
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
                <div class="flex justify-center items-center">
                    <img id="review_image_post" src="#" alt="" class="max-w-52 max-h-52 object-cover  mx-0">
                    <input type="file" name="media" id="image_post" accept="image/*,video/*" style="display: none;">
                </div>
                <div class="video-post hidden">
                    <video   controls class="mx-auto w-full h-80">
                        <source id="review_video_post" src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <input type="file" name="media" id="video_post" accept="image/*,video/*" style="display: none;">
                </div>
                <div class=" flex justify-between items-center">
                    <img src="{{ asset('image/bg-post.png') }}" alt="" class=" cursor-pointer rounded-full w-12 h-12 ">
                    <i class='bx bx-smile text-3xl text-gray-500 cursor-pointer '></i>
                </div>
                <div class="border-2 rounded-md border-gray-300 p-3 mt-4 flex justify-between items-center">
                    <span class="font-semibold text-xl"> Add to post</span>
                    <ul>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-green-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnImagePost">
                                <i class='bx bx-images'></i>
                            </span>
                        </li>
                        <li class="inline-block  ">
                            <span class="grid place-items-center text-3xl text-yellow-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnVideoPost" >
                                <i class='bx bxs-videos'></i>
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
     -->
 <!-- END  FORM POST MODAL -->