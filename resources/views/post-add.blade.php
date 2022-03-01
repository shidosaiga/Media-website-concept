@extends('layouts.master')

<title>MONACT REACT</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="icon">
<link href="{{asset('fontend/assets/img/logo2.png' )}}" rel="apple-touch-icon">

@section('content')

<div class="container py-5">
    <h1 class="pb-5">Post</h1>
    <form action="{{route('store-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="what are you thinking ?. just do it now." rows="3"></textarea>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>

    </form>
</div>

@endsection
