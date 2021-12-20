 <!-- FORM CALL VIDEO MODAL -->
<div class="fixed z-50 inset-0 invisible overflow-y-auto transition ease-out duration-500 transform  cursor-pointer" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="callModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity closeVideoCall" aria-hidden="true" id="overlayPost" ></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div id="boxVideoCall" class=" -translate-y-64 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition ease-out duration-500 sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div  class="w-full bg-white rounded-xl shadow-2xl ">
                    <div class="w-full p-5 border-b border-gray-300 relative text-center">
                        <span class=" font-semibold text-2xl">Video Call Form Friend</span>
                        <span class="closeVideoCall text-3xl rounded-full bg-gray-200 absolute right-3 top-3 hover:bg-gray-300 w-12 h-12">
                            <i class='bx bx-x mt-2 '></i>
                        </span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center mb-4">
                            <div class="">
                                <img src="{{URL::TO('/image/'. Auth::user()->avatar)}}" id="avatarFriendCall" alt="" class="rounded-full w-12 h-12 object-cover">
                            </div>
                            <div class="ml-4 text-center">
                                <span class="font-semibold text-xl" id="nameFriendCall"></span>
                                <div class="bg-gray-200 rounded-md p-1">
                                <i class='bx bxs-group'></i>
                                <span class="text-gray-800 "> Is calling you... </span>    

                                </div>
                            </div>
                        </div>
                        <div class="video-call max-h-60">
                            <img src="{{URL::TO('/image/call.gif')}}" alt="" class="w-1/2 m-auto ">
                        </div>
                        <div class="border-2 rounded-md border-gray-300 p-3 mt-4 flex justify-between items-center">
                            <span class="font-semibold text-xl"> Backgrond Video</span>
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

                            </ul>
                        </div>
                        <button class="w-full bg-green-500  mt-4 p-2 rounded-lg text-white" >
                            <!-- <span class="text-center font-semibold text-2xl " id="acceptCallVideo" onclick="joinCall(userID)">Accept</span> -->
                            <span class="text-center font-semibold text-2xl " id="acceptCallVideo" my-id="{{ Auth::user()->user_id}}">Accept</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
 <!-- END  FORM CALL VIDEO MODAL -->