@extends('layouts.authen_page')

@section('content')
<!-- Row -->
<div class=" flex  md:flex-row flex-wrap absolute z-10  top-10 md:top-0 right-0 w-full h-screen">

    <div class=" w-full md:w-2/4  md:flex justify-center text-center items-center flex-col transitiom duration-500 ease-in-out transform scale-0 " id="sign_up">
        <div class="flex justify-center text-center items-center w-full">
            <div class="w-96 md:w-7/12">
            <!-- Register -->
                <form class="bg-white shadow-xl rounded-3xl px-5 pt-10 pb-8 mb-4 transitiom duration-500 ease-in-out "  method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4 relative">
                        <span class="absolute top-4 left-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input class="shadow bg-gray-200 appearance-none border rounded-lg w-full py-4 px-10 text-[#9b59b6] leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline 
                        @error('name')  border-red-500 @enderror" name="name" id="username" type="text" placeholder="Username"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4  relative">
                        <span class="absolute top-4 left-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                        <input class="shadow bg-gray-200 appearance-none border rounded-lg w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" id="username" type="email" placeholder="Email">
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-6 relative">
                        <span class="absolute top-4 left-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input class="shadow bg-gray-200 appearance-none border rounded-lg w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password" id="password" type="password" placeholder="Password">
                        <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-6 relative">
                        <span class="absolute top-4 left-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input class="shadow bg-gray-200 appearance-none border rounded-lg w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline" name="password_confirmation" required autocomplete="new-password" id="password" type="password" placeholder="Confirm Password">
                        <input class="shadow bg-gray-200 appearance-none border rounded-lg w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline" name="id" required  type="hidden" placeholder="Confirm Password" value="<?php echo 1000000000000000 + rand(1000000,9999999);?>">
                        <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                    </div>
                    <button type="submit" class=" w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-3 rounded-lg focus:outline-none focus:shadow-outline" type="button">
                        Register
                    </button>
                    <div class="flex items-center justify-center mt-3">
                        <span class="">Already have an account ?</span>
                        <a class="inline-block align-baseline ml-1 font-bold text-sm text-gray-900 hover:text-blue-800" href="{{ route('login') }}" id="btn_signin">
                            Sign in here
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center text-center items-center w-full transitiom duration-500 ease-in-out tranform  " id="soical_networkone">
            <div class="w-7/12">
                <div class="bg-white shadow-xl rounded-3xl my-6 flex justify-center text-center p-3 items-center ">
                    <div class="flex justify-center text-center  rounded-lg shadow-md items-center bg-blue-700 p-3 mx-2 "><img class="transform scale-75 hover:scale-125 transition duration-500 ease-in-out" src="{{ asset('image/facebook-logo.png') }}" alt=""></div>
                    <div class="flex justify-center text-center  rounded-lg shadow-md items-center bg-red-600  p-3 mx-2 "><img class="transform scale-75 hover:scale-125 transition duration-500 ease-in-out" src="{{ asset('image/search.png') }}" alt=""></div>
                    <div class="flex justify-center text-center  rounded-lg shadow-md items-center bg-blue-500 p-3 mx-2 "><img class="transform scale-75 hover:scale-125 transition duration-500 ease-in-out" src="{{ asset('image/twitter.png') }}" alt=""></div>
                    <div class="flex justify-center text-center  rounded-lg shadow-md items-center bg-pink-600 p-3 mx-2 "><img class="transform scale-75 hover:scale-125 transition duration-500 ease-in-out" src="{{ asset('image/camera.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
  
</div>
<!-- End Row -->
<!-- Content Section -->
<div class=" h-screen absolute  top-0 right-0 overflow-hidden md:w-full hidden md:flex flex-row-reverse" id="content_section">
    <!-- Sign Up Content -->
    <div class="w-1/2 flex justify-center flex-col m-10  transitiom duration-500 ease-in-out transform scale-0" id="text_signup">
        <div class="w-9/12 ">
            <img src="{{asset('image/bg2.svg') }}" alt="" />
        </div>
        <div class="text-white ">
            <h2 class="text-6xl font-semibold m-10 ">Join with us</h2>
            <p class="ml-10">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae et
                cumque consectetur illo accusamus impedit eos ut. Eos, odit
                facilis.
            </p>
        </div>
    </div>
</div>
@endsection
