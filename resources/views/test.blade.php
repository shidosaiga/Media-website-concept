@extends('layouts.master')
@section('content')

<title>Me'Cha</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('fontend/assets/img/cpu.png' )}}" rel="icon">
<link href="{{asset('fontend/assets/img/cpu.png' )}}" rel="apple-touch-icon">


@section('content')


<title>Me'Cha</title>
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{asset('back_end/images/icons/favicon.ico')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/main.css')}}">
<!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
       
        
        <div class="container-login100">
			
			<div class="wrap-login100">
                <h1 class="pb-5">โพสต์</h1>
                 <div class="container">
                 
                @auth
                <a class="btn btn-primary" href="{{route('post-add')}}">เพิ่มโพสต์</a><hr><br>

                @endauth

                @forelse ( $post as $posts )

                <img src="
                @if($posts->image)
                {{asset('img/'.$posts->image)}}
                    @else
                {{asset('img/default.jpg')}}
                @endif
                " class="card" style="width: 42rem;height: 40rem" alt="...">
                <div class="card-body">
                    @foreach ( $user as $users)
                    @if($posts->userid==$users->id)
                    <h5 class="card-title">{{$users->fname}} {{$users->lname}}</h5>
                    @endif
                    @endforeach
                    <p class="card-text"> {{$posts->content}}</p>
                    <p class="card-text"><small class="text-muted">{{$posts->created_at}}
                            @if(auth()->user()->id==$posts->userid)
                         <br><a class="btn btn-primary" href="{{route('post-edit',$posts->id)}}">แก้ไข</a>
                            <a class="btn btn-danger" href="{{route('post-destroy',$posts->id)}}">ลบ</a>
                            @endif</small></p>
               
            </div>
            
            @empty
          
                    <h5 class="card-title">ไม่พบข้อมูลในการโพสต์</h5>
            
            @endforelse
        </div>
    </div>
    </div>
    </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{asset('back_end/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('back_end/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('back_end/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('back_end/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('back_end/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('back_end/js/main.js')}}"></script>

</body>

</html>



@endsection