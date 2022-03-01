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
    <form action="{{route('post-change',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
            <input type="file"  class="form-control" name="image"  id="image" >
        </div>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection
