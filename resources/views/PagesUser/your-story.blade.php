<?php
    use App\http\Controllers\UsersController;
?>
@if(!empty($stories))
    @foreach($stories as $key => $value)   
        @if(UsersController::statusFriend(Auth::user()->id,$value->user_id) == 'Accepted' || $value->user_id == Auth::user()->id)
        <?php $info = UsersController::getInfoUser($value->user_id);?> 
        <div class="w-full h-96 rounded-lg shadow-md overflow-hidden" id="Story-{{ $value->id}}">
            <div class="relative h-full group cursor-pointer">
                @if(!empty($value->image))
                <img src="{{ asset('image/'.$value->image ) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700 h-full w-full object-cover" alt="">
                @endif
                @if(!empty($value->video))
                    <video controls class="mx-auto w-full h-96 bg-gray-500" >
                        <source  src="{{URL::to('/image/'. $value->video )}}" type="video/mp4">
                        <source src="{{URL::to('/image/'. $value->video )}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                @endif
                <div class="w-full h-full bg-black absolute top-0 left-0 bg-opacity-10"></div>
                <span class="absolute bottom-0 left-2 pb-2 font-semibold text-white">
                    {{ $info->name }}
                </span>
                <div class=" rounded-full overflow-hidden absolute top-4 bg-gray-50 opacity-30 right-2 border border-yellow-500 transform -rotate-45 ">
                    <span class="text-black font-medium p-1 ">{{ $value->content}}</span>
                </div>
                <div class="w-10 h-10 rounded-full overflow-hidden absolute top-2 left-2 border-4 border-blue-500">
                    <img src="{{ asset('image/'.$info->avatar) }}" class="group-hover:transform group-hover:scale-110 transition-all duration-700  h-full w-full object-cover" alt="">
                </div>
                <div class=" absolute bottom-2 right-2">
                    <span data-id="{{$value->id }}" class="deleteStory grid place-content-center rounded-full p-2 text-2xl cursor-pointer bg-gray-200 hover:bg-gray-300 hover:text-blue-400"><i class='bx bx-cog'></i></span>
                    <div class="absolute bottom-full right-0 w-40 hidden dropStory " id="deleteStory-{{$value->id }}"> 
                        <ul>
                            <li>
                                <div class="p-2 bg-white rounded-md border-b border-gray-200 btnDelStory" data-id="{{$value->id }}"> 
                                    <span> Delete Story</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endif    