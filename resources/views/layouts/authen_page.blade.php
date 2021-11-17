<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <link rel="shortcut icon" href="{{ asset('image/logo_md.png') }}" type="image/x-icon">
  <title>Social Network Student</title>

</head>

<body>
  <div id="app" before="hello world" class="container-full mx-auto relative overflow-hidden h-screen bg-gradient-to-r from-green-400 to-blue-500">
    @yield('content')
  </div>
  <script src="{{ asset('js/style.js') }}"></script>

</html>