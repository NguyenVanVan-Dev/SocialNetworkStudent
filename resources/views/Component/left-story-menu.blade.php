 <!-- LEFT STORY MENU -->
 <div class="hidden   md:w-96 xl:w-3/12  pt-28 md:pt-16 h-full z-20 sm:flex md:flex  flex-col fixed top-0 left-0 shadow-md bg-white">
        <div class="flex justify-between items-center p-4">
           <div class="flex items-center">
                <a href="{{ route('home')}}" class="">
                    <div class="rounded-full w-8 h-8 bg-gray-200 text-gray-500 grid place-content-center">
                        <i class="bx bx-left-arrow-alt text-xl "></i>
                    </div>
                </a>
                <h2 class="ml-4 text-2xl font-semibold"> Story</h2>
           </div>
            <div>
                <span class=" grid place-content-center rounded-full p-3 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bx-cog'></i></span>
            </div>
        </div>
        <div class=" p-4 ">
            <div class="rounded-md bg-blue-100 p-3 flex justify-start items-center cursor-pointer">
                <span class="w-12 h-12 grid place-content-center rounded-full bg-blue-400 text-2xl text-white"><i class='bx bxs-book-open'></i></span>
                <span class="font-medium text-blue-400 text-xl ml-4">Browse all</span>
            </div>
        </div>
        <div class="border-b border-gray-300 dark:border-dark-third mt-6"></div>
        <div class="flex justify-between items-center p-4">
            <h2 class="text-xl font-medium text-gray-900">Your Story</h2>
            <div>
                <span class=" grid place-content-center rounded-full p-3 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bxs-book-content'></i></span>
            </div>
        </div>
        <ul class="p-4 pt-6">
            <li>
                <a href="javascript:void(0)" id="yourStory" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold block">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('stories.create')}}" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <span class="w-10 h-10 grid place-content-center rounded-full bg-gray-300 text-2xl text-black"><i class='bx bxs-book-add'></i></span>
                    <span class="font-semibold block">More new stories</span>
                </a>
            </li>
            <li class="border-b border-gray-300 dark:border-dark-third mt-6">
            </li>
        </ul>
        
    </div>
    <!--  END LEFT STORY MENU -->