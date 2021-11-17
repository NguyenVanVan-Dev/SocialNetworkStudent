 <!-- LEFT MENU -->
 <div class="hidden   md:w-96 xl:w-3/12  pt-28 md:pt-16 h-full z-20 sm:flex md:flex  flex-col fixed top-0 left-0 shadow-md bg-white">
        <div class="flex justify-between items-center p-4">
            <h2 class="text-2xl font-semibold"> Friends</h2>
            <div>
                <span class=" grid place-content-center rounded-full p-3 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bx-cog'></i></span>
            </div>
        </div>
        <ul class="p-4 pt-0">
            <li>
                <a href="{{URL::TO('/profile/'. Auth::user()->id)}}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold block">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('show_friends') }}" class="flex items-center justify-between space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <div class="flex-1 flex items-center ">
                        <img src="{{ asset('image/add-friend.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold ml-2 ">Request Friends </span>
                    </div>
                    <div class="transform translate-y-1">
                      <i class='bx bx-chevron-right text-2xl'></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('suggestion_friends')}}" class="flex items-center justify-between space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <div class="flex-1 flex items-center ">
                        <img src="{{ asset('image/suggest.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold ml-2 ">Suggestions Friends</span>
                    </div>
                    <div class="transform translate-y-1">
                      <i class='bx bx-chevron-right text-2xl'></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('list_friends')}}" class="flex items-center justify-between space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <div class="flex-1 flex items-center ">
                        <img src="{{ asset('image/friends.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold ml-2 ">All Friends</span>
                    </div>
                    <div class="transform translate-y-1">
                      <i class='bx bx-chevron-right text-2xl'></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <div class="flex-1 flex items-center ">
                        <img src="{{ asset('image/birthday-cake.png') }}" alt="" class="w-10 h-10 rounded-full">
                        <span class="font-semibold ml-2 ">Happy Birthday Friends</span>
                    </div>
                </a>
            </li>
            <li class="border-b border-gray-300 dark:border-dark-third mt-6">
            </li>
        </ul>
        <div class="flex justify-between items-center px-4 h-4 group">
            <span class="font-semibold text-gray-500 text-lg dark:text-dark-txt">Your Shortcuts</span>
            <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                rounded-md hidden group-hover:inline-block">Edit</span>
        </div>
    </div>
    <!--  END LEFT MENU -->