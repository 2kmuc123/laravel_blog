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
    <h1>BLOG CỦA ANH HỢP ĐANG ĐƯỢC ĐIỀU CHẾ !!!</h1><br><br>
    <a href="{{route('admin.add')}}" class="btn btn-primary">ADD</a><br><br><br>
    @if(isset($blog))
    @foreach($blog as $item)
    <div>
        <img src="{{$item->image1}}" class="img-thumbnail rounded float-left img-fluid" alt="" width="150px" height="150px">
        <div class="mr-5" style="padding:5px;margin-right: 5px;">
            <h2 class="row">{{$item->title}}</h2>
            <span><button class="btn btn-warning"><a href="{{route('admin.update',[$item->id])}}">sửa</a></button></span>
            <span class="col-6"><button class="btn btn-danger"><a onclick="return confirm('Bạn có muốn xóa')" href="{{route('admin.delete',[$item->id])}}">xóa</a></button></span>
            <p>{{$item->content}}</p>
        </div>
        <br>
        <p>{{$item->quote}}</p>
        <hr><br><br>
    </div>
    @endforeach
    @else
    <h1>Không tồn tại bài viết nào</h1>
    @endif

    <div class="container row">
        {{$blog->links()}}
    </div>

</div>

@endsection