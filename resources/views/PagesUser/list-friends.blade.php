@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-end  w-full">
    <!-- LEFT MENU -->
    @include('Component.left-menu-list-friend')
    <!--  END LEFT MENU -->
    <!-- MID CONTENT -->
    <div class="w-full relative right-0 top-0 xl:w-9/12  pt-32 lg:pt-16 px-4 bg-gray-100" id="profile-friend">
        <div class="flex justify-center items-center h-screen">
            <div class="flex flex-col justify-center items-center">
                <div class="text-center m-auto">
                    <img src=" {{URL::to('/image/undraw_people.svg')}}" class="m-auto rounded-md w-3/5 h-2/5 object-cover" alt="">
                </div>
                <h3 class=" font-semibold text-xl text-gray-800">Select the name of the person you want to preview the profile.</h3>
            </div>
        </div>
    </div>
    <!-- END MID CONTENT-->
    
</div>

<!--  END MAIN CONTENT -->

@endsection