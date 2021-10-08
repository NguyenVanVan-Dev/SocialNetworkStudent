<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Soial NetWork Students</title>
    <link rel="shortcut icon" href="{{ asset('image/logo_md.png') }}" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
    /* width */
    ::-webkit-scrollbar {
    width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 4px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #BCC0C4; 
    border-radius: 4px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background:#BCC0C4; 
    }
    .btn_friend:focus .box_friend,
    .btn_messenger:focus .box_messenger{
        display: block;
    }
    </style>
</head>

<body id="app" class="bg-gray-100 dark:bg-dark-main">
    
    @include('Component.header')
    @yield('content')
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>