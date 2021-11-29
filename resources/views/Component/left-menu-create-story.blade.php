 <!-- LEFT MENU CREATE STORY-->
 <div class="hidden   md:w-96 xl:w-3/12  pt-28 md:pt-16 h-full z-20 sm:flex md:flex  flex-col fixed top-0 left-0 shadow-lg bg-white">
        <div class="flex justify-between items-center p-4">
            <h2 class="text-2xl font-semibold"> Your stories</h2>
            <div>
                <span class=" grid place-content-center rounded-full p-3 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bx-cog'></i></span>
            </div>
        </div>
        
        <ul class="p-4 pt-0">
            <li>
                <a href="{{ route('stories.index')}}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold block">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li class="border-b border-gray-300 dark:border-dark-third mt-6">
            <li>
                <div class="w-full  bg-gray-50 rounded-md flex justify-center items-center p-1 border border-gray-500 mt-4 ">
                    <textarea id="contentStoty" type="text" rows="4" cols="50" name="content" placeholder="Enter your story..." class="outline-none w-full p-2 px-4 bg-transparent "></textarea>
                </div>
            </li>
            <li>
                <div class=" bg-gray-50 rounded-md flex justify-center items-center mt-4">
                    <button id="btnImgStory" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    Select Image
                    </button>
                    <input id="imageStory" type="file" name="image" placeholder="Enter your story..." class="hidden outline-none w-full p-2 bg-transparent ">
                </div>
            </li>
            <li>
                <div class=" bg-gray-50 rounded-md flex justify-center items-center mt-4">
                    <button id="btnVideoStory" class="bg-indigo-500 hover:bg-indigo-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Select Video
                    </button>
                    <input id="videoStory" type="file" name="video" placeholder="Enter your story..." class="hidden outline-none w-full p-2 bg-transparent ">
                </div>
            </li>
            <li class="border-b border-gray-300 dark:border-dark-third mt-6"></li>
            <li>
                <div class="flex justify-between items-center p-2">
                    <div class="bg-gray-200 p-2 rounded-lg cursor-pointer outline-none text-gray-800 font-medium">
                       <a href="{{ route('home')}}" class="block">
                        <span>Cancel</span>
                       </a>
                    </div>
                    <div id="btnPostStory" class="bg-blue-500 p-2 rounded-lg cursor-pointer outline-none text-white font-medium">
                        <span>Post Story</span>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <!-- END LEFT MENU CREATE STORY-->