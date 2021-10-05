<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Soial NetWork Students</title>
    <link rel="shortcut icon" href="{{ asset('image/logoface.png') }}" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-100 dark:bg-dark-main">
    @include('Component.header')
    @yield('content')
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>