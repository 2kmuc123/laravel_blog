@extends('layouts.app')


@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" type="text/css" href="{{asset('client/styles/new.css')}}">
@endsection


@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row mb-5">
        <section class="blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="all-blog-posts">
                            <div class="row">
                                @foreach($blog as $item)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{$item->image1}}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span>Moto new 2022</span>
                                            <a href="post-details.html">
                                                <h4>{{$item->title}}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">Múc</a></li>
                                                <li><a href="#">{{$item->created_at}}</a></li>
                                                <li><a href="#">12 Comments</a></li>
                                            </ul>
                                            <p>{{$item->quote}}</p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">Múc</a>,</li>
                                                            <li><a href="#">múc</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#">Facebook</a>,</li>
                                                            <li><a href="#"> Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-lg-12">

                                    <div class="col-lg">
                                        {{$blog->links()}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sidebar-item recent-posts">
                                        <div class="sidebar-heading">
                                            <h2>Xem gần đây</h2>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                @foreach($blog as $more)
                                                <li><a href="post-details.html">
                                                        <h5>{{$more->title}}</h5>
                                                        <span>{{$more->created_at}}</span>
                                                    </a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>

</div>
@include('layouts.footer')
@endsection