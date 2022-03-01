@extends('layouts.master')

<title>MONACT REACT</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="icon">
<link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="apple-touch-icon">

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">

    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('back_end/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('back_end/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('back_end/assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('back_end/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('back_end/assets/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<div class="content-wrapper">
    
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Profile</h1>
       
    </div>
    <form action="{{route('profile_change')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="ibox">
                        <div class="ibox-body text-center">
                            <div class="m-t-20">
                                <img class="rounded-circle" src="@if(Auth::user()->image)
                            {{asset('img/'.Auth::user()->image)}}
                            @else
                            {{asset('img/default.jpg')}}
                            @endif" width="600px" height="300px " object-fit="cover">
                            </div>
                            <h5 class="font-strong m-b-10 m-t-10">{{Auth::user()->fname}} {{Auth::user()->lname}}</h5>

                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="tab-content">

                                <h4 class="text-info m-b-20 m-t-20"><i class="ti-user"></i> Profile</h4>

                                <table class="table table-striped table-hover">
                                    
                                    <div class="col">


                                        <div class="mb-3">
                                            <label class="form-label">คำนำหน้า</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">ชื่อ</label>
                                            <input type="text" class="form-control" name="fname" value="{{Auth::user()->fname}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">นามสกุล</label>
                                            <input type="text" class="form-control" name="lname" value="{{Auth::user()->lname}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">หมายเลขบัตรประชาชน</label>
                                            <input type="text" class="form-control" name="idcard" value="{{Auth::user()->idcard}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">เพศ</label>
                                            <input type="text" class="form-control" name="sex" value="{{Auth::user()->sex}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">ที่อยู่</label>
                                            <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">อีเมลล์</label>
                                            <input type="text" class="form-control" readonly value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">สมัคเมื้อ</label>
                                            <input type="text" class="form-control" readonly value="{{Auth::user()->created_at}}">
                                            
                                        </div>


                                        {{-- <div class="mb-3">
                                <label class="form-label">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div> --}}
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label">รูปภาพ</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="col align-self-end">
                                                <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                                            </div>

                                        </div>
                                </table>
                            </div>
    </form>
    <div class="col mt-4">

        <label class="form-label">หาต้องการเปลี่ยนรหัสผ่านคลิก!</label>
        <a href="{{route('repassword')}}" type="button" class="btn btn-danger">Repassword</a>

    </div>

</div>

</div>
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
<script src="{{asset('back_end/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{asset('back_end/assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
<script src="{{asset('back_end/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{asset('back_end/assets/js/app.min.js')}}" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{asset('back_end/assets/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
</body>

</html>
@endsection