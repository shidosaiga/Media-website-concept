<head>
    <title>MONACT REACT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="icon">
    <link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{asset('fontend/assets/img/logo3.png' )}}" alt="" width="60" height="54">MONACT REACT
        </a>

        <a class="navbar-brand" href="/">Post</a>

        <!-- <a class="navbar-brand" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></a> -->

        <a class="navbar-brand {{ (request()->is('profile')) ? 'active' : '' }}" href="{{route('login')}}">

            @auth<img class="rounded-circle" src="@if(Auth::user()->image)
                            {{asset('img/'.Auth::user()->image)}}
                            @else
                            {{asset('img/default.jpg')}}
                            @endif" width="55px" height="55px" object-fit="cover">
                            {{Auth::user()->fname}} 
                            <!-- My Profile -->
            @else
            Login
            @endauth</a>


        @auth
        <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
            </svg> Logout </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endauth



        <!-- <li class="nav-item">
                    <a class="nav-link {{ (request()->is('profile')) ? 'active' : '' }}" href="{{route('login')}}">
                        @auth
                        โปรไฟล์
                        @else
                        ลงชื่อเข้าใช้
                        @endauth
                    </a>
                    
                </li> -->
        <!-- <li class="nav-item">
                    <a class="nav-link " href="#">
                    test
                    </a>
                    
                </li> -->
        <!-- @auth
        <li class="nav-item">
            <a class="nav-brand" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"> ออกจากระบบ </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @endauth -->


    </div>
</nav>