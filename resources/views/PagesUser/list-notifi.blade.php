
@foreach($list_notifi as $key => $value)
<li class=" px-2 py-1 mb-1 rounded-md bg-gray-200">
    <a href="" class="">
        <div class="flex items-center">
            <div class="w-max mr-3">
                <img src="{{URL::to('/image/'.$value->user_avatar)}}" alt="" class="rounded-full w-14 h-14">
            </div>
            <div class="flex-auto">
                <div class="flex items-center justify-between text-lg">
                    <span class="font-semibold">{{$value->user_name}}</span>
                    <span class="w-3 h-3 bg-blue-700 rounded-full"></span>
                </div>
                <div class="text-gray-500 text-sm flex justify-between items-center">
                    <div class="w-4/5 ">
                        <p class="truncate w-56">
                            <span>
                              {{$value->notification}}
                            </span>
                           
                        </p>
                    </div>
                    <div class="w-1/5">
                        <span class="text-xs "> {{ date_format($value->created_at,"Y/m/d H:i:s")}}</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
@endforeach