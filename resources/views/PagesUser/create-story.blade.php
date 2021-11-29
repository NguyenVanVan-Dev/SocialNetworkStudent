@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end  w-full">
    <!-- LEFT MENU -->
    @include('Component.left-menu-create-story')
    <!--  END LEFT MENU -->
    <!-- MID CONTENT -->
    <div class=" xl:w-9/12 w-full  pt-28 md:pt-16 h-full z-20 sm:flex md:flex  flex-col fixed top-0 right-0 shadow-md bg-gray-100" >
        <div class="flex flex-col  items-center m-auto rounded-lg w-4/5 h-full mx-auto my-3 bg-white p-3 shadow-lg">
            <div class="self-start	">
                <h2 class="font-medium text-2xl  ">Preview</h2>
            </div>
            <div class=" p-4 bg-black h-full w-full rounded-lg">
                <div class="w-1/3 flex justify-between items-center h-full m-auto ">
                        <div class="flex rounded-md overflow-hidden relative  w-full h-full bg-gray-200">
                            <div class="absolute top-10 left-1/2 transform -translate-x-1/2 z-10 -rotate-12">
                                <span id="rcStory" class="p-2 px-6 rounded-full  text-white bg-indigo-600 hidden">  </span>
                            </div>
                            <video id="rvStory" controls class="mx-auto w-full h-full bg-gray-600 hidden" >
                                <source id="review_video_story" src="{{URL::to('/image/dao-nuong7.mp4')}}" type="video/mp4">
                                <source src="{{URL::to('/image/dao-nuong7.mp4' )}}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <img  id="review_image_story" src="{{URL::to('/image/yasuo.jpg')}}" class="hidden group-hover:transform object-cover group-hover:scale-110 transition-all duration-700 w-full" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MID CONTENT-->
    
</div>

<!--  END MAIN CONTENT -->

@endsection