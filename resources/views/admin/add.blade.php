@extends('layouts.app')

@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

@endsection
@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand font-weight-bold" href=" {{route('blog.index')}} ">BLOGMUC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{route('admin.index')}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{route('admin.list')}}">LIST <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>
</div>
<br><br><br>
<div class="container">
    <br>
    <h1>ANH HỢP THÊM BÀI VIẾT VÀO DATABASE</h1>
    @if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{session('msg')}}
    </div>
    @endif

    <form method="post" action="{{route('admin.acadd')}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
            @error('title')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quote</label>
            <textarea class="row" name="quote" id="" cols="150" rows="10"></textarea>
            @error('quote')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content1</label>
            <textarea class="row" name="content1" id="" cols="150" rows="10"></textarea>
            @error('content1')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content2</label>
            <textarea class="row" name="content2" id="" cols="150" rows="10"></textarea>
            @error('content2')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image1</label>
            <input type="text" name="image1" class="form-control" aria-describedby="emailHelp">
            @error('image1')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image2</label>
            <input type="text" name="image2" class="form-control" aria-describedby="emailHelp">
            @error('image2')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image3</label>
            <input type="text" name="image3" class="form-control" aria-describedby="emailHelp">
            @error('image3')
            <span style="color: red;">{{$message}}</span><br>
            @enderror
        </div>
        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection