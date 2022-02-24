@extends('layouts.app')

@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

@endsection
@section('content')
<div class="container">
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
    <br><br><br>
    <br>
    <h1>DANH SÁCH TÀI KHOẢN !!!</h1><br><br>
    <a href="{{route('register')}}" class="btn btn-primary">ADD</a><br><br><br>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NAME</th>
            <th scope="col">MAIL</th>
            <th scope="col">QUYỀN</th>
            <th scope="col">XÓA</th>
        </tr>

        @if(isset($user))
        @foreach($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            @if($item->role == 0)
            <td>ADMIN</td>
            @else
            <td>USER</td>
            @endif
            <td><button class="btn btn-danger"><a onclick="return confirm('Bạn có muốn xóa')" href="{{route('admin.userdelete',[$item->id])}}">xóa</a></button></td>
        </tr>
        @endforeach
        @endif
    </table>

</div>

@endsection