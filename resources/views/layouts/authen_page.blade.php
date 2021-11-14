<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <title>Social Network Student</title>

</head>

<body>
  <div id="app" before="hello world" class="container-full mx-auto relative overflow-hidden h-screen bg-gradient-to-r from-green-400 to-blue-500">
    <button type="button" class="focus:outline-none relative z-50 openModal text-white text-sm py-2.5 px-5 mt-5 mx-5  rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Open Modal</button>
   
    @yield('content')
  </div>
  <script src="{{ asset('js/style.js') }}"></script>

</html>