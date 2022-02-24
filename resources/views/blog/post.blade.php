@extends('layouts.app')


@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" type="text/css" href="{{asset('client/styles/new.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('client/styles/owl.css')}}">
@endsection


@section('content')
@include('layouts.nav')

<div class="container">
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{$blog->image1}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Lifestyle</span>
                                        <a href="post-details.html">
                                            <h4>{{$blog->title}}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">{{$blog->create_at}}</a></li>
                                            <li><a href="#">10 Comments</a></li>
                                        </ul>
                                        <p>
                                            {{$blog->quote}}
                                        </p>
                                        <div class="blog-thumb">
                                            <img src="{{$blog->image2}}" alt="">
                                        </div>
                                        <p>
                                            {{$blog->content1}}
                                        </p>
                                        <div class="blog-thumb">
                                            <img src="{{$blog->image3}}" alt="">
                                        </div>
                                        <p>
                                            {{$blog->content2}}
                                        </p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">MUC</a>,</li>
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
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="sidebar-heading">
                                        <h2>4 comments</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="{{$blog->image3}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>muc<span>May 16, 2020</span></h4>
                                                    <p>Blog của anh hợp</p>
                                                </div>
                                            </li>
                                            <li class="replied">
                                                <div class="author-thumb">
                                                    <img src="{{$blog->image2}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>muc<span>May 16, 2020</span></h4>
                                                    <p>Blog của anh hợp. anh hợp vạn tuế anh hợp vạn tuế anh hợp vạn tuế</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="{{$blog->image1}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>muc<span>May 16, 2020</span></h4>
                                                    <p>Blog của anh hợp</p>
                                                </div>
                                            </li>
                                            <li class="replied">
                                                <div class="author-thumb">
                                                    <img src="{{$blog->image2}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>muc<span>May 16, 2020</span></h4>
                                                    <p>Blog của anh hợp. anh hợp vạn tuế anh hợp vạn tuế anh hợp vạn tuế</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Submit</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                                            @foreach($data as $more)
                                            <li><a href="{{route('blog.post',[$more->id])}}">
                                                    <h5>{{$more->title}}</h5>
                                                    <span>{{$more->created_at}}</span>
                                                </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">MUC</a></li>
                                            <li><a href="#">2022</a></li>
                                            <li><a href="#">LARAVEL</a></li>
                                            <li><a href="#">PHP</a></li>
                                            <li><a href="#">ASP.NET</a></li>
                                            <li><a href="#">TVH</a></li>
                                            <li><a href="#">MUC</a></li>
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
@include('layouts.footer')
@endsection