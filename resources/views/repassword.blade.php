@extends('layouts.app')
<title>MONACT REACT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="icon">  
  <link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="apple-touch-icon">


@section('content')


<title>Me'Cha</title>
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('back_end/images/icons/favicon.ico')}}"/>
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
				<div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('fontend/assets/img/about.jpg' )}}" alt="IMG">
				</div>
				
                <form method="POST" action="{{ route('repassword_change') }}">
                    @csrf
					<span class="login100-form-title">
						เปลี่ยน Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
				
					<div class="wrap-input100 validate-input" data-validate = "Enter password_confirmation">
						<input class="input100" type="password" name="password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							เปลี่ยน Password
						</button>
					</div>
                 
					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('profile')}}">
                       
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							 ย้อนกลับ
						</a>
					</div>
				</form>
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/js/main.js')}}"></script>

</body>
</html>



@endsection