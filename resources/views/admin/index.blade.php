@extends('layouts.app')

@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    body {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .chu {
        font-size: 80px;
        font-weight: bold;
        color: #40E0D0;

        text-shadow: 10px 2px 4px black;
    }
</style>
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
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{route('admin.user')}}">USER <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<br><br><br><br><br><br><br><br><br><br>
<div class="container">


    <div>
        <marquee class="chu">BLOGMUC - TRẦN VĂN HỢP</marquee>
    </div>

</div>
@endsection