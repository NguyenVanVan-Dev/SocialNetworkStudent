 <!-- LEFT MENU -->
 <?php   use App\http\Controllers\UsersController;  ?>
 <div class=" hidden md:flex md:w-1/3 lg:w-1/5 pt-16 h-full bg-white  flex-col fixed top-0 left-0 shadow-md overflow-y-auto">
        <ul class="p-4 ">
            <li>
                <a href="{{URL::TO('/profile/'. Auth::user()->id)}}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{URL::to('/image/'. Auth::user()->avatar)}}" alt="" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold block">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('show_friends') }}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/friends.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Friends</span>
                </a>
            </li>
            <li>
                <a href="{{ route('messenger')}}" id="Messenger" class="flex items-center relative space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/mesenger.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Messenger</span>
                    @if(UsersController::getNumNotiMes())
                        <span id="notifiMes" class="pending absolute top-1/2 right-4 transform -translate-y-1/2 bg-red-500 rounded-full w-6 h-6 grid place-content-center text-white"> {{ UsersController::getNumNotiMes()}} </span>
                    @endif
                    
                </a>
            </li>
            <li>
                <a href="{{ route('stories.index')}}" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/story.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Story</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/market.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Market</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/group.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Groups</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/watch.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Watch</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/game.webp') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Play Game</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/history.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Recent Activity</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/weath.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Weather </span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/tools.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Tools</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Notebook.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Notebook</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/FAQ.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">FAQ</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Settings.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Settings</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Shield.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Shield</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Bank.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Bank Connect</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/Credit.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Checkout</span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/suckhoe.png') }}" alt="" class="w-10 h-10 rounded-full">
                    <span class="font-semibold block">Emotional Health </span>
                </a>
            </li>
            <li class=" menu_show">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="show_more_menu">
                    <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                        <i class='bx bx-chevron-down'></i>
                    </span>
                    <span class="font-semibold block"> Show More</span></span>
                </a>
            </li>
            <li class="hidden menu_hidden">
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-full
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third " id="hidden_more_menu">
                    <span class="w-10 h-10 rounded-full grid place-items-center bg-gray-300
                        dark:bg-dark-second">
                        <i class='bx bx-chevron-up'></i>
                    </span>
                    <span class="font-semibold block"> Hidden Away</span></span>
                </a>
            </li>
            <li class=" border-b border-gray-300 dark:border-dark-third mt-6">
            </li>
        </ul>
        <div class="flex justify-between items-center px-4 h-4 group">
            <span class="font-semibold text-gray-500 text-lg dark:text-dark-txt">Your Shortcuts</span>
            <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                rounded-md hidden group-hover:inline-block">Edit</span>
        </div>
        <ul class="p-4">
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/f8_icon.png') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">F8 Học Lập Trình Để Đi Làm</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/congdong.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">Cộng đồng Front-end(HTML/CSS/JS) Việt Nam</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/bg_vku.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">Đại học Công Nghệ Thông Tin & Truyền Thông Việt - Hàn</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-md
                    transition-all dark:text-dark-txt dark:hover:bg-dark-third">
                    <img src="{{ asset('image/bg-dannang.jpg') }}" alt="" class="w-10 h-10 rounded-md">
                    <span class="font-semibold block text-md">Tin Nhanh Đà Nẵng</span>
                </a>
            </li>
        </ul>
        <div class="mt-auto p-6 text-sm text-gray-500 dark:text-dark-txt">
            <a href="">Privacy</a>
            <span>.</span>
            <a href="">Terms</a>
            <span>.</span>
            <a href="">Advertising</a>
            <span>.</span>
            <a href="">Cookies</a>
            <span>.</span>
            <a href="">Ad choices</a>
            <span>.</span>
            <a href="">More</a>
            <span>.</span>
            <a href="">Vấn Nguyễn 2021</a>
        </div>
    </div>
    <!--  END LEFT MENU -->