<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->
    <title>@yield('title','AEUA')</title>
</head>
<body>
    <div class="main-content">
        <div class="sidebar">
            @include('partials/sidebar')
        </div>
        <div class="main">
            <div class="header-wrapper">
                <div class="header-title">
                    <span>@yield('page_title',"Dashboard")</span>
                </div>
                <div class="user-info">
                    <div class="user">
                        <span>Admin Name</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/2493969055.js" crossorigin="anonymous"></script>  
</body>
</html>