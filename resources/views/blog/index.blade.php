@extends('layouts.app')


@section('css')
@include('layouts.blogcss')
<link rel="stylesheet" type="text/css" href="{{asset('client/styles/new.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('client/styles/owl.css')}}">
@endsection


@section('content')
@include('layouts.nav')
<div class="main-banner header-text mg-0">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            @foreach($blog as $item0)
            <div class="item">
                <img src="{{$item0->image3}}" alt="" width="150px" height="500px">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>MÚC</span>
                        </div>
                        <a href="{{route('blog.post',[$item0->id])}}">
                            <h4>{{$item0->title}}</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">{{$item0->created_at}}</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
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
                                            <a href="{{route('blog.post',[$item->id])}}">
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



</div>



@include('layouts.footer')
@endsection

@section('blogjs')
<script src="{{asset('client/js/custom1.js')}}"></script>
<script src="{{asset('client/js/owl.js')}}"></script>
<script src="{{asset('client/js/slick.js')}}"></script>
<script src="{{asset('client/js/isotope.js')}}"></script>
<script src="{{asset('client/js/accordions.js')}}"></script>
<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>
@endsection