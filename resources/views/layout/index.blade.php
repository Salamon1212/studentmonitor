<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>design</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/design/temp/page.css') }}">
    <link href="{{ asset('frontend/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="{{ asset('frontend/js/bundle.min.js') }}" ></script>    
    <script src="{{ asset('frontend/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('frontend/js/sweetalert.js')}}"></script>
    <script src="{{ asset('frontend/js/ajax.min.js')}}"></script>
</head>
<body>
    <div class="container-part">
        <div class="header-content">
            <div class="logo">
                <img src=" {{ URL('images/logo.jpg') }} " alt="" width="50px" height="50px">
                <strong><span>sprit bomb</span></strong>
            </div>
        
            <div class="login-portal">
                <img src="{{ URL('images/avatar.jpg')}}" alt="" width="40px" height="40px">
                <span id="user-name">user name</span>
            </div> 
        </div>
        <div class="sidebar-content">
            <div class="sidebar-title">
                <strong><span>Feature</span></strong>
            </div>
            <div class="sidebar-feature">
                <ul>
                    <li>home</li>
                    <li>dashboard</li>
                    <li>staff</li>
                    <li>students</li>
                    <li>request</li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <x-notification />
        @yield('content')            
        </div>
        <div class="footer-content">
            <span class="footer-cont">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </span>
        </div>
    </div>
    @stack('scripts')    
</body>
</html>